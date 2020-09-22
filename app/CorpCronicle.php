<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorpCronicle extends Model
{
  protected $fillable =[
    'date',
    'month',
    'year',
    'title',
    'desc',
  ];
}
