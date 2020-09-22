<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{

  public function years()
  {
    return $this->hasMany('App\FinancialStatement','year_id','id');
  }

  public function value_statements(){
    	return $this->hasMany('App\ValueStatement');
    }

}
