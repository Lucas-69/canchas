<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Busines extends Model
{
    //
    protected $table = "business";

    protected $fillable = ['id','name','ubicacion','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
