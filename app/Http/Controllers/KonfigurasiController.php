<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Konfigurasi;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfigurasi_web = Konfigurasi::all();
        return view('konfigurasi.index', ['konfigurasi_web' => $konfigurasi_web]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama_website' => 'required',
            'alamat_website' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat_halaman_website' => 'required',
            'judul_website' => 'required',
            'keyword' => 'required',
            'deskripsi_situs' => 'required',

        ]);
        $form_data = array(
            'nama_website'    =>  $request->nama_website,
            'alamat_website'     =>  $request->alamat_website,
            'telepon'    =>  $request->telepon,
            'email'     =>  $request->email,
            'alamat_halaman_website'    =>  $request->alamat_halaman_website,
            'judul_website'     =>  $request->judul_website,
            'keyword'    =>  $request->keyword,
            'deskripsi_situs'     =>  $request->deskripsi_situs,
        );

        Konfigurasi::create($form_data);
        return redirect()->route('konfigurasi.index')->with('success', 'Data Added Successfully.');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_website)
    {
       $request->validate([
            'nama_website' => 'required',
            'alamat_website' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat_halaman_website' => 'required',
            'judul_website' => 'required',
            'keyword' => 'required',
            'deskripsi_situs' => 'required',
        ]);

        $konfigurasi_web = Konfigurasi::find($id_website);
        $konfigurasi_web->nama_website = $request->input('nama_website');
        $konfigurasi_web->alamat_website = $request->input('alamat_website');
        $konfigurasi_web->telepon = $request->input('telepon');
        $konfigurasi_web->email = $request->input('email');
        $konfigurasi_web->alamat_halaman_website = $request->input('alamat_halaman_website');
        $konfigurasi_web->judul_website = $request->input('judul_website');
        $konfigurasi_web->keyword = $request->input('keyword');
        $konfigurasi_web->deskripsi_situs = $request->input('deskripsi_situs');
        $konfigurasi_web->save();
       return redirect()->route('konfigurasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
