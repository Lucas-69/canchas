<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    //
	protected $table = "courts";

	protected $fillable = ['id','cantidad_jugadores','precio','company_id'];

	public function company(){
		return $this->belongsTo('App\Busines');
	}

	public function turns(){
		return $this->hasMany('App\Turn
			');
	}
}
