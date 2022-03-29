<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramDonatur extends Model
{
    protected $table = 'program_donatur';
    // default
    // protected $fillable = [
    //     'id_program', 'nominal_donasi', 'id_rekening', 'nama_pengirim',
    //     'no_rekening_pengirim', 'atas_nama', 'email', 'pesan', 'status_verifikasi',
    //     'status_donasi', 'inserted_at', 'inserted_by', 'edited_at', 'edited_by', 'verified_at', 'verified_by'
    // ];

    protected $fillable = [
        'id_program', 'nominal_donasi', 'nama_pengirim',
        'telepon', 'email', 'pesan', 'status_verifikasi',
        'status_donasi', 'inserted_at', 'inserted_by', 'edited_at', 'edited_by', 'verified_at', 'verified_by'
    ];

    public $timestamps = false;

    // status verifikasi = menunggu verifikasi, ditolak, terverifikasi
    // status donasi = proses penghimpunan, disalurkan

    public function program()
    {
        return $this->belongsTo('App\Program', 'id_program', 'id');
    }

    public function rekening()
    {
        return $this->belongsTo('App\Rekening', 'id_rekening', 'id');
    }
}