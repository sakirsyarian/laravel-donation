<?php

namespace App\Http\Controllers\Relawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\GambarProgram;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::where('id_user', auth()->user()->id)->orderByDesc('id')->get();
        // $programs = Program::where('id_user', auth()->user()->id)->orderBy('id', 'ASC')->get();
        return view('pages.relawan.programs', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.relawan.create-program');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateReq = $request->validate([
            'tambah_nama_program' => 'required|min:3|max:50',
            'tambah_target' => 'required',
            'tambah_info' => 'required',
            'tambah_batas_akhir' => 'required',
            'tambah_gambar_program' => 'image|mimes:jpeg,png,jpg,gif|max:5000'
        ]);

        $program = new Program();
        $program->id_user = auth()->user()->id;
        $program->nama_program = $validateReq['tambah_nama_program'];
        $program->target = $validateReq['tambah_target'];
        $program->info = $validateReq['tambah_info'];
        $program->batas_akhir = str_replace("/", "-", $validateReq['tambah_batas_akhir']);
        $program->inserted_by = auth()->user()->id;
        $program->inserted_at = Carbon::now();
        $program->jumlah_terkumpul = 0;
        $program->jumlah_terverifikasi = 0;
        $program->save();

        $destinationPath = 'public/images/program';
        $imageName = auth()->user()->id . "_" . $request->file('tambah_gambar_program')->getClientOriginalName();
        $programImagePath = $request->file('tambah_gambar_program')->storeAs($destinationPath, $imageName);
        $gambarProgram = new GambarProgram();
        $gambarProgram->id_program = $program->id;
        $gambarProgram->ekstensi = $request->file('tambah_gambar_program')->extension();
        $gambarProgram->nama = $imageName;
        $gambarProgram->ukuran =  $request->file('tambah_gambar_program')->getSize();
        $gambarProgram->path = $programImagePath;
        $gambarProgram->save();

        return redirect()->route('relawan.programs.index')->with(session()->flash('alert-success', 'Program berhasil ditambahkan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::find($id);
        $persTerkumpul = ceil(($program->jumlah_terkumpul / $program->target) * 100);
        $persVerif = ceil(($program->jumlah_terverifikasi / $program->target) * 100);

        $donaturs = $program->donaturs;
        $jmlTerverifikasi = $donaturs->where('status_verifikasi', 'terverifikasi')->count();
        $jmlDitolak = $donaturs->where('status_verifikasi', 'ditolak')->count();
        $jmlMenunggu = $donaturs->where('status_verifikasi', 'menunggu verifikasi')->count();

        $beritas = $program->beritas->sortByDesc("inserted_at")->take(3);

        return view('pages.relawan.detail-program', compact('program', 'jmlTerverifikasi', 'jmlDitolak', 'jmlMenunggu', 'persTerkumpul', 'persVerif', 'beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);

        return view('pages.relawan.edit-program', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateReq = $request->validate([
            'edit_nama_program' => 'required|min:3|max:50',
            'edit_target' => 'required',
            'edit_info' => 'required',
            'edit_batas_akhir' => 'required',
        ]);

        $program = Program::find($id);
        $program->nama_program = $validateReq['edit_nama_program'];
        $program->target = $validateReq['edit_target'];
        $program->info = $validateReq['edit_info'];
        $program->batas_akhir = str_replace("/", "-", $validateReq['edit_batas_akhir']);
        $program->edited_by = auth()->user()->id;
        $program->edited_at = Carbon::now();
        $program->save();

        if ($request->file('edit_gambar_program')) {
            $gambarProgram = GambarProgram::find($program->gambarProgram->id);
            Storage::delete($gambarProgram->path);

            $destinationPath = 'public/images/program';
            $imageName = auth()->user()->id . "_" . Carbon::now()->format('dmYH') . "_" . $request->file('edit_gambar_program')->getClientOriginalName();
            $programImagePath = $request->file('edit_gambar_program')->storeAs($destinationPath, $imageName);
            $gambarProgram->ekstensi = $request->file('edit_gambar_program')->extension();
            $gambarProgram->nama = $imageName;
            $gambarProgram->ukuran =  $request->file('edit_gambar_program')->getSize();
            $gambarProgram->path = $programImagePath;
            $gambarProgram->save();
        }

        return redirect()->route('relawan.programs.index')->with(session()->flash('alert-success', 'Data program berhasil diubah'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $gambarProgram = GambarProgram::find($program->gambarProgram->id);
        Storage::delete($gambarProgram->path);
        $gambarProgram->delete();
        $program->delete();

        return redirect()->route('relawan.programs.index')->with(session()->flash('alert-success', 'Data program berhasil dihapus'));
    }
}