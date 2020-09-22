<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FareastStar extends Model
{
  use SoftDeletes;

  protected $dates =[
    'deleted_at',
  ];

  protected $fillable =[
    'name',
    'thumbnail',
  ];

  public function fareast_star_values(){
    	return $this->hasMany('App\FareastStarValue');
   }
}
