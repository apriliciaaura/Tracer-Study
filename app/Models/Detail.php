<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Combobox;

class Detail extends Model
{
    protected $table = 'detail_combobox';
    protected $primaryKey = 'id_detail';
    protected $fillable = ['combobox_id', 'nilai', 'keterangan', 'no_urut'];

    public function combobox(){
    	return $this->belongsTo(Combobox::class);
    }
}
