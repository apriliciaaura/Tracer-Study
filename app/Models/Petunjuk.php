<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petunjuk extends Model
{
    protected $table = 'petunjuk';
    protected $primaryKey = 'id_petunjuk';
    protected $fillable = ['isi'];

    public function petunjuk(){
    	return $this->belongsTo(Petunjuk::class);
	}
}
