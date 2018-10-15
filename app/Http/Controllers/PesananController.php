<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pgawai;
use App\Pesanan;
use Session;
use App\Makanan;
use App\Mnum;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesanan = Pesanan::with('Pgawai')->get();
        return view('pesanan.index',compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pgawai = Pgawai::all();
        $makanan = Makanan::all();
        $mnum = Mnum::all();
        return view('pesanan.create',compact('pgawai' , 'makanan' , 'mnum'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            'lantai' => 'required',
            'pgawai_id' => 'required',
            'makanan_id' => 'required',
            'mnum_id' => 'required'
        ]);
        $pesanan = new Pesanan;
        $pesanan->lantai = $request->lantai;
        $pesanan->pgawai_id = $request->pgawai_id;
        $pesanan->save();
        $pesanan->Makanan()->attach($request->makanan_id);
        $pesanan->Mnum()->attach($request->mnum_id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pesanan->lantai</b>"
        ]);
        return redirect()->route('pesanan.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('pesanan.show',compact('pesanan'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pgawai = Pgawai::all();
        $selectedPgawai = Pesanan::findOrFail($id)->pgawai_id;
        $selected = $pesanan->Makanan->pluck('id')->toArray();
        $makanan = Makanan::all();
        $selected = $pesanan->Mnum->pluck('id')->toArray();
        $mnum = Mnum::all();
        return view('pesanan.edit',compact('pesanan','pgawai','selectedPgawai','selected','makanan','selected','mnum'));
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
        $this->validate($request,[
            'lantai' => 'required|',
            'pgawai_id' => 'required',
            'makanan_id' => 'required|',
            'mnum_id' => 'required|'
        ]);
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->lantai = $request->lantai;
        $pesanan->pgawai_id = $request->pgawai_id;
        $pesanan->save();
        $pesanan->Makanan()->sync($request->makanan_id);
        $pesanan->Mnum()->sync($request->mnum_id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$pesanan->lantai</b>"
        ]);
        return redirect()->route('pesanan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Pesanan::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pesanan.index');
    }
}
