<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterWidgets extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = ['widget_name'];
}
