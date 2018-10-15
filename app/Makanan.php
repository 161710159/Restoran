<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
	protected $table = 'makanans';
    protected $fillable = ['nama','harga'];
    public $timestamps = true;

    public function Pesanan() 
    {
		return $this->belongsToMany('App\Pesanan', 'table', 'pesanan_id', 'makanan_id');
	}
}