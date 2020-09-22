<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
  use SoftDeletes;

  protected $dates =[
    'deleted_at',
  ];

  protected $fillable =[
    'title',
    'photo',
    'message',
    'signature',
    'name',
    'designation',
    'qr_code',
  ];

  function relationBetweenManagement()
  {
    return $this->hasOne('App\Management','id','name');
  }


}
