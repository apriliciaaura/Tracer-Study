<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Combobox;

class ComboboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_combobox = DB::table('data_combobox');
        return view('combobox.index', ['data_combobox' => $data_combobox]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('combobox.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Combobox::create(['nama' => $request->nama]);
        return redirect()->route('combobox.index')->with('Sukses', "Data Berhasil Diinput");
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
    public function edit($id_combobox)
    {
        $data_combobox = Combobox::find($id_combobox);
        return view('combobox.edit', compact('data_combobox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_combobox)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data_combobox = Combobox::find($id_combobox);
        $data_combobox->nama = $request->input('nama');
        $data_combobox->save();
       return redirect()->route('combobox.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_combobox)
    {
        $data_combobox = Combobox::findOrFail($id_combobox);
        $data_combobox->delete();
        return redirect()->route('combobox.index');
    }
}
