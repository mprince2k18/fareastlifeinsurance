<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ceo extends Model
{
  use SoftDeletes;

  protected $dates =[
    'deleted_at',
  ];

  protected $fillable =[
    'name',
    'chairman_message',
    'circle_photo',
    'square_photo',
    'long_photo',
    'position',
    'signature',
    'qr_code',
  ];
}
