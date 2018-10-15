<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pgawai extends Model
{
    protected $table = 'pgawais';
     protected $fillable = ['nama','jk','alamat','pemilik_id','gaji'];
     public $timestamps = true;

	public function Pemilik()
	{
		return $this->belongsTo('App\Pemilik','pemilik_id');
	}

    public function Pesanan()
    {
    	return $this->hasOne('App\Pesanan','pesanan_id');
    }
}
