<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  use SoftDeletes;

  protected $dates =[
    'deleted_at',
  ];

  protected $fillable =[
    'banner_caption',
    'banner',
    'link',

  ];
}
