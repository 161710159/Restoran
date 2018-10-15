<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mnum extends Model
{
   protected $table = 'mnums';
    protected $fillable = ['nama','harga'];
    public $timestamps = true;

    public function Pesanan() 
    {
		return $this->belongsToMany('App\Pesanan', 'table', 'pesanan_id', 'mnum_id');
	}
}