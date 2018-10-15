<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use Session;
class MakananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $makanan = Makanan::paginate(10);
        return view('makanan.index',compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makanan.create');
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
            'harga' => 'required|'
        ]);
        $makanan = new Makanan;
        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$makanan->nama</b>"
        ]);
        return redirect()->route('makanan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $makanan = Makanan::findOrFail($id);
        return view('makanan.show',compact('makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makanan = Makanan::findOrFail($id);
        return view('makanan.edit',compact('makanan'));
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
            'harga' => 'required|'
        ]);
        $makanan = Makanan::findOrFail($id);
        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$makanan->nama</b>"
        ]);
        return redirect()->route('makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Makanan::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('makanan.index');
    }
}
