<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
  use SoftDeletes;

  protected $dates =[
    'deleted_at',
  ];

  protected $fillable =[
    'event_title',
    'event_details',
    'photo',
  ];
}
