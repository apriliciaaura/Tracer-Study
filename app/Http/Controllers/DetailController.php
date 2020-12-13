<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;
use App\Models\Combobox;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_combobox = DB::table('detail_combobox');
        return view('detail.index', ['detail_combobox' => $detail_combobox]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Detail::create($request->all());
        return view('detail.index')->with('Sukses', "Data Berhasil Diinput");
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
            'nilai' => 'required',
            'keterangan' => 'required',
            'no_urut' => 'required',
        ]);
        $form_data = array(
            'nilai'    =>  $request->nilai,
            'keterangan'     =>  $request->keterangan,
            'no_urut'    =>  $request->no_urut,
        );

        Detail::create($form_data);
        return redirect()->route('detail.index')->with('success', 'Data Added Successfully.');
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
    public function edit($id_detail)
    {
        $detail_combobox = Detail::find($id_detail);
        return view('detail.index', compact('detail_combobox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_detail)
    {
        $request->validate([
            'nilai' => 'required',
            'keterangan' => 'required',
            'no_urut' => 'required',
        ]);

        $detail_combobox = Detail::find($id_detail);
        $detail_combobox->nilai = $request->input('nilai');
        $detail_combobox->keterangan = $request->input('keterangan');
        $detail_combobox->keterangan = $request->input('no_urut');
        $detail_combobox->save();
       return redirect()->route('detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_detail)
    {
        $detail_combobox = Detail::findOrFail($id_detail);
        $detail_combobox->delete();
        return redirect()->route('detail.index');
    }
}
