<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialStatement extends Model
{

  protected $fillable =[
    'title',
    'year_id',
    'file'
  ];

  function relationBetweenYear()
  {
    return $this->hasOne('App\Year','id','year_id');
  }

}
