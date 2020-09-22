<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FooterMenu extends Model
{
  use SoftDeletes;

  protected $dates =[
    'deleted_at',
  ];

  protected $fillable =[
    'footer_menu_name',
    'existing_menus',
    'footer_widget_id',
    'link',
  ];

// relationBetweenMainMenu
  function relationBetweenMainMenu()
  {
    return $this->hasOne('App\MainMenu','id','existing_menus');
  }


// relationBetweenMainMenu
  function relationBetweenFooterWidgets()
  {
    return $this->hasOne('App\FooterWidgets','id','footer_widget_id');
  }


  // END
}
