<?php

namespace App\Http\Controllers;

use App\Imports\ProfileImport;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.index');
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        $nama_file = $file->hashName();

        $path = $file->storeAs('public/excel/',$nama_file);

        $import = Excel::import(new ProfileImport(), storage_path('app/public/excel/'.$nama_file));

        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Diimport!']);
        }
    }

}
