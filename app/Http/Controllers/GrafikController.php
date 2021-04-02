<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Grafik;

class GrafikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $grafik = DB::table('grafik')->paginate(10);
        return view('grafik.index', ['grafik' => $grafik]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grafik.create');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
 
        $grafik = DB::table('grafik')
        ->where('judul', 'LIKE', '%'.$cari.'%')
        ->orWhere('soal', 'LIKE', '%'.$cari.'%')
        ->paginate(10);
 
        return view('grafik.index',['grafik' => $grafik]);
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
            'judul' =>  'required',
            'soal' => 'required',
            'jenis_grafik' => 'required',
            'jenis_label' => 'required',
            'tahun_lulus' => 'required',
        ]);
        $form_data = array(
            'judul'    =>  $request->judul,
            'soal'     =>  $request->soal,
            'jenis_grafik'    =>  $request->jenis_grafik,
            'jenis_label'    =>  $request->jenis_label,
            'tahun_lulus'    =>  $request->tahun_lulus,
        );

        Grafik::create($form_data);
        return redirect()->route('grafik.index')->with('success', 'Data Added Successfully.');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_grafik)
    {
        $grafik = Grafik::findOrFail($id_grafik);
        $grafik->delete();
        return redirect()->route('grafik.index');
    }
}
