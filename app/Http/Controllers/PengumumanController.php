<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.index', ['pengumuman' => $pengumuman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
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
            'tanggal' => 'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $form_data = array(
            'tanggal'    =>  $request->tanggal,
            'judul'     =>  $request->judul,
            'isi'    =>  $request->isi,
        );

        Pengumuman::create($form_data);
        return redirect()->route('pengumuman.index')->with('success', 'Data Added Successfully.');
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
    public function edit($id_pengumuman)
    {
        $pengumuman = Pengumuman::find($id_pengumuman);
        return view('pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengumuman)
    {
        $request->validate([
            'tanggal' => 'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $pengumuman = Pengumuman::find($id_pengumuman);
        $pengumuman->tanggal = $request->input('tanggal');
        $pengumuman->judul = $request->input('judul');
        $pengumuman->isi = $request->input('isi');
        $pengumuman->save();
        return redirect()->route('pengumuman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_pengumuman)
    {
        $pengumuman = Pengumuman::findOrFail($id_pengumuman);
        $pengumuman->delete();
        return redirect()->route('pengumuman.index');
    }
}
