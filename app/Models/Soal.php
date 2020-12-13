<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Kategori;

class Soal extends Model
{
    protected $table = 'soal';
    protected $primaryKey = 'id_soal';
    protected $fillable = ['kode_soal', 'soal', 'kategori_id', 'no_urut', 'status'];

    public function kategori(){
    	return $this->belongsTo(Kategori::class);
    }
}
