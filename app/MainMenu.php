<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainMenu extends Model
{
    use SoftDeletes;

    protected $dates = [
      'deleted_at',
    ];

    protected $fillable = [
      'perent_menu_name',
      'link',
    ];
    // END
}
