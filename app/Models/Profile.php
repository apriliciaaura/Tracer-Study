<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Profile;

class Profile extends Model
{
    protected $table = 'data_alumni';
    protected $primaryKey = 'id_alumni';
    protected $fillable = ['nim', 'nama', 'program_studi', 'no_hp', 'email', 'tahun_lulus'];

    public function profile(){
    	return $this->belongsTo(Profile::class);
	}
}
