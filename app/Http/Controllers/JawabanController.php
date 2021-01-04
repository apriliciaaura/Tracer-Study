<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jawaban;
use App\Models\Soal;
use App\Models\Jenis;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban = DB::table('jawaban')->join('jenis_jawaban', 'id_jenis', '=', 'jawaban.jenis_id');
        return view('jawaban.index', ['jawaban' => $jawaban]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
            'jenis_id' => 'required',
            'kode_jawaban' => 'required',
            'nilai' => 'required',
            'data_combobox' => 'required',
            'keterangan' => 'required',
            'no_urut' => 'required',
            'status' => 'required',
        ]);
        $form_data = array(
            'jenis_id'    =>  $request->jenis_id,
            'kode_jawaban'     =>  $request->kode_jawaban,
            'nilai'    =>  $request->nilai,
            'data_combobox'    =>  $request->data_combobox,
            'keterangan'    =>  $request->keterangan,
            'no_urut'    =>  $request->no_urut,
            'status'    =>  $request->status,
        );

        Jawaban::create($form_data);
        return redirect()->route('jawaban.index')->with('success', 'Data Added Successfully.');
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
    public function edit(Request $request, $id_jawaban)
    {
        if($request->isMethod('POST')){
            $data = $request->all();

            Jawaban::where(['id_jawaban'=>$id_jawaban])->update(['jenis_id'=>$data['jenis_id'], 'kode_jawaban'=>$data['kode_jawaban'], 'nilai'=>$data['nilai'], 'data_combobox'=>$data['data_combobox'], 'keterangan'=>$data['keterangan'], 'no_urut'=>$data['no_urut'], 'status'=>$data['status']]);
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jawaban)
    {
        $jawaban = Jawaban::where('jenis_id', $request->get('jenis_id'))
                ->update([
                    'kode_jawaban' => $request->get('kode_jawaban'),
                    'nilai' => $request->get('nilai'),
                    'data_combobox' => $request->get('data_combobox'),
                    'keterangan' => $request->get('keterangan'),
                    'no_urut' => $request->get('no_urut'),
                    'status' => $request->get('status')
                ]);

        return redirect()->route('jawaban.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_jawaban)
    {
        $jawaban = Jawaban::findOrFail($id_jawaban);
        $jawaban->delete();
        return redirect()->route('jawaban.index');
    }
}
