<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $table = 'pemiliks'; // -> meminta izin untuk mengakses table pemiliks
    protected $fillable = ['nama','jk','status','alamat','sejarah']; // -> field apa saja yang boleh di isi -> fill = mengisi, able = boleh jadi fillable = boleh di isi
    public $timestamps = true; // penanggalan otomatis record kapan di isi dan di update di aktikfkan

    public function Pgawai()
    {
    	return $this->hasMany('App\Pgawai','pegawai_id');
    }
}
