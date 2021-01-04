<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Soal;
use App\Jenis;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $primaryKey = 'id_jawaban';
    protected $fillable = ['soal_id', 'jenis_id', 'kode_jawaban', 'nilai', 'data_combobox', 'keterangan', 'no_urut', 'status'];

    public function soal(){
    	return $this->belongsTo(Soal::class);
    }

    public function jenis(){
    	return $this->belongsTo(Jenis::class);
    }
}
