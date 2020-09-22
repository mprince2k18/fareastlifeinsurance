<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FareastStarValue extends Model
{
    public function fareast_star(){
    	return $this->belongsTo('App\FareastStar');
    }
}
