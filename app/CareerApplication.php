<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
  protected $fillable = [
    'careerId',
    'fName',
    'lName',
    'email',
    'phone',
    'address',
    'city',
    'countryId',
    'stateId',
    'companyName',
    'pTitle',
    'skills',
    'university',
    'resume',
    'photo',
    'degree',
    'grade'
  ];
}
