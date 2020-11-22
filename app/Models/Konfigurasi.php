<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    protected $table = 'konfigurasi_web';
    protected $primaryKey = 'id_website';
    protected $fillable = ['nama_website', 'alamat_website', 'telepon', 'email', 'alamat_halaman_website', 'judul_website', 'keyword', 'deskripsi_situs'];

    public function konfigurasi(){
    	return $this->belongsTo(Konfigurasi::class);
	}

}
