<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' =>  'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $form_data = array(
            'tanggal'    =>  $request->tanggal,
            'judul'     =>  $request->judul,
            'isi'    =>  $request->isi,
        );

        Berita::create($form_data);
        return redirect()->route('berita.index')->with('success', 'Data Added Successfully.');
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
    public function edit($id_berita)
    {
        $berita = Berita::find($id_berita);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_berita)
    {
        $request->validate([
            'tanggal' => 'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $berita = Berita::find($id_berita);
        $berita->tanggal = $request->input('tanggal');
        $berita->judul = $request->input('judul');
        $berita->isi = $request->input('isi');
        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_berita)
    {
        $berita = Berita::findOrFail($id_berita);
        $berita->delete();
        return redirect()->route('berita.index');
    }
}
