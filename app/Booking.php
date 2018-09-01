<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = "bookings";

    protected $fillable = ['id','turn_id','reservation_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
