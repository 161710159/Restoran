<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;
use Session;

class PemilikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $a = Pemilik::all();
        return view('pemilik.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemilik.create');
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
            'status' => 'required|',
            'alamat' => 'required|',
            'sejarah' => 'required|'
        ]);
        $a = new Pemilik;
        $a->nama = $request->nama;
        $a->jk = $request->jk;
        $a->status = $request->status;
        $a->alamat = $request->alamat;
        $a->sejarah = $request->sejarah;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('pemilik.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Pemilik::findOrFail($id);
        return view('pemilik.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Pemilik::findOrFail($id);
        return view('pemilik.edit',compact('a'));
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
            'status' => 'required|',
            'alamat' => 'required|',
            'sejarah' => 'required|'
        ]);
        $a = Pemilik::findOrFail($id);
        $a->nama = $request->nama;
        $a->jk = $request->jk;
        $a->status = $request->status;
        $a->alamat = $request->alamat;
        $a->sejarah = $request->sejarah;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$a->nama</b>"
        ]);
        return redirect()->route('pemilik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Pemilik::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pemilik.index');
    }
}
