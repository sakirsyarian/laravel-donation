<?php

namespace App\Http\Controllers;

use App\KontenBlog;
use Illuminate\Http\Request;
use App\Program;
use App\ProgramBerita;
use App\ProgramDonatur;
use App\RefVendorSaving;
use App\Rekening;
use App\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{


    public function __construct()
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function index()
    {
        $programs = Program::orderBy('id', 'DESC')->take(10)->get();
        $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();

        return view('pages.umum.dashboard', compact('programs', 'blogs'));
    }

    public function home()
    {
        $programs = Program::orderBy('id', 'DESC')->take(3)->get();
        $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
        $title = 'Yayasan Generasi Yatim Tahfidz';
        $description = "Generasi yatim tahfidz merupakan yayasan yatim piatu atau lembaga sosial yang bersifat non-profit dan berfokus mencetak generasi tahfidz Al-Qur’an";

        return view('pages.umum.home', compact('title', 'description', 'programs', 'blogs'));
    }

    public function about()
    {
        $title = 'Yayasan Generasi Yatim Tahfidz - Tentang';
        $description = "Generasi yatim tahfidz merupakan yayasan yatim piatu terdekat atau lembaga sosial yang bersifat non-profit dan berfokus mencetak generasi tahfidz Al-Qur’an";

        return view('pages.umum.about', compact('title', 'description'));
    }

    public function gallery()
    {
        $title = 'Yayasan Generasi Yatim Tahfidz - Galeri';
        $description = "Generasi yatim tahfidz merupakan panti asuhan terdekat atau lembaga sosial yang bersifat non-profit dan berfokus mencetak generasi tahfidz Al-Qur’an";

        return view('pages.umum.gallery', compact('title', 'description'));
    }

    public function contact()
    {
        $title = 'Yayasan Generasi Yatim Tahfidz - Kontak';
        $description = "Generasi yatim tahfidz merupakan badan wakaf al quran atau lembaga sosial yang bersifat non-profit dan berfokus mencetak generasi tahfidz Al-Qur’an";

        return view('pages.umum.contact', compact('title', 'description'));
    }

    public function show($id)
    {
        $program = Program::find($id);
        $donasi = Donation::find($id);
        $beritas = $program->beritas->sortByDesc("inserted_at")->take(3);

        // $program->jumlah_terkumpul += $donations->amount;
        // $program->save();

        $persTerkumpul = ceil(($program->jumlah_terkumpul / $program->target) * 100);
        $persVerif = ceil(($program->jumlah_terverifikasi / $program->target) * 100);
        $vendors = RefVendorSaving::all();

        return view('pages.umum.detail-donasi', compact('program', 'donasi', 'vendors', 'persTerkumpul', 'persVerif', 'beritas'));
    }

    public function kirimDonasi(Request $request, $id)
    {
        $program = Program::find($id);

        $validator = Validator::make($request->all(), [
            'donatur_nominal_donasi' => 'required',
            'donatur_vendor_rekening' => 'required',
            'donatur_rekening' => 'required',
            'donatur_nama_pengirim' => 'required',
            'donatur_atas_nama' => 'required',
            'donatur_email' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('detail_donasi', $program->id)->with(session()->flash('alert-warning', 'Maaf, data Anda kurang lengkap'));
        }

        $rekening = Rekening::where('nomor_rekening', '=', $request->donatur_rekening)->first();
        if ($rekening == null) {
            $rekening = new Rekening();
            $rekening->id_vendor = $request->donatur_vendor_rekening;
            $rekening->nama_rekening = $request->donatur_nama_pengirim;
            $rekening->nomor_rekening = $request->donatur_rekening;
            $rekening->is_active = true;
            $rekening->inserted_at = Carbon::now();
            $rekening->inserted_by = 1;
            $rekening->save();
        }

        $programDonatur = new ProgramDonatur();
        $programDonatur->id_program = $program->id;
        $programDonatur->nominal_donasi = $request->donatur_nominal_donasi;
        $programDonatur->id_rekening = $rekening->id;
        $programDonatur->nama_pengirim = $request->donatur_nama_pengirim;
        $programDonatur->no_rekening_pengirim = $rekening->nomor_rekening;
        $programDonatur->atas_nama = $request->donatur_atas_nama;
        $programDonatur->email = $request->donatur_email;
        $programDonatur->pesan = $request->donatur_pesan;
        $programDonatur->status_verifikasi = "menunggu verifikasi";
        $programDonatur->status_donasi = "proses penghimpunan";
        $programDonatur->inserted_at = Carbon::now();
        $programDonatur->inserted_by = 1;
        $programDonatur->edited_at = Carbon::now();
        $programDonatur->edited_by = 1;
        $programDonatur->save();

        $program->jumlah_terkumpul += $programDonatur->nominal_donasi;
        $program->save();

        return redirect()->route('detail_donasi', $program->id)->with(session()->flash('alert-success', 'Terima kasih, donasi Anda akan segera disalurkan'));
    }

    public function daftarBerita($id)
    {
        $program = Program::find($id);
        $beritas = ProgramBerita::where('id_program', $id)->paginate(10);

        return view('pages.umum.program-beritas', compact('program', 'beritas'));
    }

    public function detailBerita($id, $berita)
    {
        $program = Program::find($id);
        $berita = $program->beritas->where('id', $berita)->first();

        return view('pages.umum.detail-berita', compact('berita'));
    }

    public function detailBlog($id)
    {
        $blog = KontenBlog::find($id);

        return view('pages.umum.detail-blog', compact('blog'));
    }
}