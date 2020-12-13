<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combobox extends Model
{
    protected $table = 'data_combobox';
    protected $primaryKey = 'id_combobox';
    protected $fillable = ['nama'];
}
