<?php

namespace App\Imports;

use App\Profile;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfileImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Profile([
            'nim' => $row[0],
            'nama' => $row[1],
            'program_studi' => $row[2],
            'no_hp' => $row[3],
            'email' => $row[4],
            'tahun_lulus' => $row[5],
        ]);
    }
}