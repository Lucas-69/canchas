<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    //
    protected $table = "turns";

    protected $fillable = ['id','fecha','hora','state','court_id'];

    public function court(){
    	return $this->belongsTo('App\Court');
    }
}
