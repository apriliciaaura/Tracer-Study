<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Pengaturan extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = ['name', 'email', 'username', 'password', 'level'];

    public function user(){
    	return $this->belongsTo(User::class);
	}
}
