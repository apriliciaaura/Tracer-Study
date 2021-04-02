<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Soal;
use App\Models\Kategori;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = DB::table('soal')->join('kategori_soal', 'id_kategori', '=', 'soal.kategori_id')->paginate(10);
        return view('soal.index', ['soal' => $soal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_soal = Kategori::all()->sortBy('kategori');
        return view('soal.create', compact('kategori_soal'));
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
            'kode_soal' => 'required',
            'soal' => 'required',
            'kategori_id' => 'required',
            'no_urut' => 'required',
            'status' => 'required',
        ]);
        $form_data = array(
            'kode_soal'    =>  $request->kode_soal,
            'soal'     =>  $request->soal,
            'kategori_id'    =>  $request->kategori_id,
            'no_urut'     =>  $request->no_urut,
            'status'    =>  $request->status,
        );

        Soal::create($form_data);
        return redirect()->route('soal.index')->with('success', 'Data Added Successfully.');
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
    public function edit($id_soal)
    {
        $kategori_soal = Kategori::all()->sortBy('kategori');
        $soal = Soal::find($id_soal);
        return view('soal.edit', compact('soal'))->with('kategori_soal', $kategori_soal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_soal)
    {
        $request->validate([
            'kategori_id' => 'required',
            'kode_soal' => 'required',
            'soal' => 'required',
            'no_urut' => 'required',
            'status' => 'required',
        ]);

        $soal = Soal::find($id_soal);
        $soal->kategori_id = $request->input('kategori_id');
        $soal->kode_soal = $request->input('kode_soal');
        $soal->soal = $request->input('soal');
        $soal->no_urut = $request->input('no_urut');
        $soal->status = $request->input('status');
        $soal->save();
       return redirect()->route('soal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_soal)
    {
        $soal = Soal::findOrFail($id_soal);
        $soal->delete();
        return redirect()->route('soal.index');
    }
}
