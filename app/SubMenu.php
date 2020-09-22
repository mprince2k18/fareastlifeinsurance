<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubMenu extends Model
{
    use SoftDeletes;

    protected $dates= [
      'deleted_at',
    ];

    protected $fillable= [
      'sub_menu_name',
      'parent_menu_id',
      'sub_menu_link',
    ];


function relationBetweenMainMenu()
{
  return $this->hasOne('App\MainMenu','id','parent_menu_id');
}

    // END
}
