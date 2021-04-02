<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grafik extends Model
{
    protected $table = 'grafik';
    protected $primaryKey = 'id_grafik';
    protected $fillable = ['judul', 'soal', 'jenis_grafik', 'jenis_label', 'tahun_lulus'];

    public function grafik(){
    	return $this->belongsTo(Grafik::class);
	}
}
