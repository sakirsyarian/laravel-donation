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
        $programs = Program::orderBy('batas_akhir', 'ASC')->take(10)->get();
        $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();

        return view('pages.umum.home', compact('programs', 'blogs'));
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
        // $program = Program::find($id);

        /* $validator = Validator::make($request->all(), [
            'donatur_nominal_donasi' => 'required',
            'donatur_vendor_rekening' => 'required',
            'donatur_rekening' => 'required',
            'donatur_nama_pengirim' => 'required',
            'donatur_atas_nama' => 'required',
            'donatur_email' => 'required',
        ]); */

        /* if ($validator->fails()) {
            return redirect()->route('detail_donasi', $program->id)->with(session()->flash('alert-warning', 'Maaf, data Anda kurang lengkap'));
        } */

        /*  $rekening = Rekening::where('nomor_rekening', '=', $request->donatur_rekening)->first();
        if ($rekening == null) {
            $rekening = new Rekening();
            $rekening->id_vendor = $request->donatur_vendor_rekening;
            $rekening->nama_rekening = $request->donatur_nama_pengirim;
            $rekening->nomor_rekening = $request->donatur_rekening;
            $rekening->is_active = true;
            $rekening->inserted_at = Carbon::now();
            $rekening->inserted_by = 1;
            $rekening->save();
        } */

        /*  $programDonatur = new ProgramDonatur();
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
        $programDonatur->save(); */

        // $program->jumlah_terkumpul += $programDonatur->nominal_donasi;
        // $program->save();

        // return redirect()->route('detail_donasi', $program->id)->with(session()->flash('alert-success', 'Terima kasih, donasi Anda akan segera disalurkan'));

        $program = Program::find($id);

        \DB::transaction(function () use ($request, $program) {
            $programDonatur = ProgramDonatur::create([
                'id_program' => $program->id,
                'transaction_id' => \Str::uuid(),
                'nama_pengirim' => $request->donatur_nama_pengirim,
                'email' => $request->donatur_email,
                'telepon' => $request->donatur_telepon,
                'nominal_donasi' => $request->donatur_nominal_donasi,
                'pesan' => $request->donatur_pesan,
                'status_verifikasi' => "menunggu verifikasi",
                'status_donasi' => "proses penghimpunan",
                'inserted_at' => Carbon::now()->format('d-m-Y'),
                'inserted_by' => 2,
                'edited_at' => Carbon::now(),
                'edited_by' => 2,
            ]);

            $payload = [
                'transaction_details' => [
                    'order_id'      => $programDonatur->id_transaction,
                    'gross_amount'  => $programDonatur->nominal_donasi,
                ],
                'customer_details' => [
                    'first_name'    => $programDonatur->nama_pengirim,
                    'email'         => $programDonatur->email,
                    'phone'         => $programDonatur->telepon,
                    // 'address'       => '',
                ],
                'item_details' => [
                    [
                        'id'       => $programDonatur->id_program,
                        'price'    => $programDonatur->nominal_donasi,
                        'quantity' => 1,
                        'name'     => $request->donatur_jenis_donasi,
                    ]
                ]
            ];
            $snapToken = \Midtrans\Snap::getSnapToken($payload);
            $programDonatur->snap_token = $snapToken;
            $programDonatur->save();

            $this->response['snap_token'] = $snapToken;
        });

        return response()->json($this->response);
    }

    public function notifikasi(Request $request)
    {
        $notif = new \Midtrans\Notification();

        \DB::transaction(function () use ($notif) {

            $transaction = $notif->transaction_status;
            $type = $notif->payment_type;
            $orderId = $notif->order_id;
            $fraud = $notif->fraud_status;
            $donation = Donation::where('transaction_id', $orderId)->first();

            if ($transaction == 'capture') {
                if ($type == 'credit_card') {

                    if ($fraud == 'challenge') {
                        $donation->setStatusPending();
                    } else {
                        $donation->setStatusSuccess();
                    }
                }
            } elseif ($transaction == 'settlement') {

                $donation->setStatusSuccess();
            } elseif ($transaction == 'pending') {

                $donation->setStatusPending();
            } elseif ($transaction == 'deny') {

                $donation->setStatusFailed();
            } elseif ($transaction == 'expire') {

                $donation->setStatusExpired();
            } elseif ($transaction == 'cancel') {

                $donation->setStatusFailed();
            }
        });

        return;
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