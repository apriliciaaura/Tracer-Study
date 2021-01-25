<?php

namespace App\Http\Controllers;

use App\Exports\ProfileExport;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
    {
        return view('export.index');
    }

    public function export(Request $request)
    {
        return Excel::download(new ProfileExport(), 'profile.xlsx');
    }
}
