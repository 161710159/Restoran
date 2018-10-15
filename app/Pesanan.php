<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
	protected $table = 'pesanans';
    protected $fillable = ['lantai','pgawai_id'];
    public $timestamps = true;

    public function Pgawai()
	{
		return $this->belongsTo('App\Pgawai','pgawai_id');
	}
	 public function Makanan() 
    {
        return $this->belongsToMany('App\Makanan', 'table', 'pesanan_id', 'makanan_id');
    }
     public function Mnum() 
    {
        return $this->belongsToMany('App\Mnum', 'table', 'pesanan_id', 'mnum_id');
    }
}
