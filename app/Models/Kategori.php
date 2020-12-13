<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Soal;

class Kategori extends Model
{
    protected $table = 'kategori_soal';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['kategori'];
}
