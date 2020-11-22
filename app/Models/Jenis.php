<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis_jawaban';
    protected $primaryKey = 'id_jenis';
    protected $fillable = ['jenis_jawaban'];

    public function jenis(){
    	return $this->belongsTo(Jenis::class);
	}
}
