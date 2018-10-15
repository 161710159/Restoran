<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mnum;
use Session;

class MnumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mnum = Mnum::paginate(10);
        return view('mnum.index',compact('mnum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mnum.create');
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
        $mnum = new Mnum;
        $mnum->nama = $request->nama;
        $mnum->harga = $request->harga;
        $mnum->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$mnum->nama</b>"
        ]);
        return redirect()->route('mnum.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mnum = Mnum::findOrFail($id);
        return view('mnum.show',compact('mnum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mnum = Mnum::findOrFail($id);
        return view('mnum.edit',compact('mnum'));
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
        $mnum = Mnum::findOrFail($id);
        $mnum->nama = $request->nama;
        $mnum->harga = $request->harga;
        $mnum->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$mnum->nama</b>"
        ]);
        return redirect()->route('mnum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Mnum::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('mnum.index');
    }
}
