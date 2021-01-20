<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'photo', 'price','discount','description','restaurant_id',
    ];

     public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
