<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Management extends Model
{
  use SoftDeletes;

  protected $table = 'managements';

  protected $dates =[
    'deleted_at',
  ];

  protected $fillable =[
    'name',
    'speaks',
    'menagaement_board_id',
    'photo',
  ];


  function relationBetweenManagementBoard()
  {
    return $this->hasOne('App\ManagementBoard','id','menagaement_board_id');
  }


  // END
}
