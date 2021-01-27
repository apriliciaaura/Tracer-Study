<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $fillable = ['tanggal', 'judul', 'isi'];

    public function berita(){
    	return $this->belongsTo(Berita::class);
	}
}
