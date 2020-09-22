<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueStatement extends Model
{
    /*function relationBetweenYear()
  {
    return $this->hasOne('App\Year','id','year_id');
  }*/

   public function year(){
    	return $this->belongsTo('App\Year');
    }
}
