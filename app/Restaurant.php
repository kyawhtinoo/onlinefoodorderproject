<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
     protected $fillable = [
        'name', 'photo', 'type',
    ];

  public function items()
  {
    return $this->hasMany('App\Item');
  }
}
