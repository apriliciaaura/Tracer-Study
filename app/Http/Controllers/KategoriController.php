<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_soal = DB::table('kategori_soal');
        return view('kategori.index', ['kategori_soal' => $kategori_soal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create(['kategori' => $request->kategori]);
        return redirect()->route('kategori.index')->with('Sukses', "Data Berhasil Diinput");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori)
    {
        $kategori_soal = Kategori::find($id_kategori);
        return view('kategori.edit', compact('kategori_soal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori)
    {
        $request->validate([
            'kategori' => 'required',
        ]);

        $kategori_soal = Kategori::find($id_kategori);
        $kategori_soal->kategori = $request->input('kategori');
        $kategori_soal->save();
       return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_kategori)
    {
        $kategori_soal = Kategori::findOrFail($id_kategori);
        $kategori_soal->delete();
        return redirect()->route('kategori.index');
    }
}
