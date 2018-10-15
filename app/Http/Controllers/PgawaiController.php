<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pgawai;
use App\Pemilik;
use Session;

class PgawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pgawai = Pgawai::with('Pemilik')->get();
        return view('pgawai.index',compact('pgawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemilik = Pemilik::all();
        return view('pgawai.create',compact('pemilik'));
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
            'nama' => 'required|',
            'jk' => 'required|',
            'alamat' => 'required|',
            'pemilik_id' => 'required',
            'gaji' => 'required|'
        ]);
        $pgawai = new Pgawai;
        $pgawai->nama = $request->nama;
        $pgawai->jk = $request->jk;
        $pgawai->alamat = $request->alamat;
        $pgawai->pemilik_id = $request->pemilik_id;
        $pgawai->gaji = $request->gaji;
        $pgawai->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pgawai->nama</b>"
        ]);
        return redirect()->route('pgawai.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pgawai = Pgawai::findOrFail($id);
        return view('pgawai.show',compact('pgawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pgawai = Pgawai::findOrFail($id);
        $pemilik = Pemilik::all();
        $selectedPemilik = Pgawai::findOrFail($id)->Pemilik_id;
        return view('pgawai.edit',compact('pgawai','pemilik','selectedPemilik'));
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
            'nama' => 'required|',
            'jk' => 'required|',
            'alamat' => 'required|',
            'pemilik_id' => 'required',
            'gaji' => 'required|'
        ]);
        $pgawai = Pgawai::findOrFail($id);
        $pgawai->nama = $request->nama;
        $pgawai->jk = $request->jk;
        $pgawai->alamat = $request->alamat;
        $pgawai->pemilik_id = $request->pemilik_id;
        $pgawai->gaji = $request->gaji;
        $pgawai->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$pgawai->nama</b>"
        ]);
        return redirect()->route('pgawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Pgawai::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pgawai.index');
    }
}
