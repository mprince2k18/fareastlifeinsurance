<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activation extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'activation_name',
  ];

  protected $dates=['deleted_at'];
  // END
}
