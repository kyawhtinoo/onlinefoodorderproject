<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orderdetail;

class Item extends Model
{
    protected $fillable = [
        'name', 'photo', 'price','description','restaurant_id',
    ];

     public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

     public function orders($value='')
    {
       return $this->belongsToMany('App\Order','orderdetails')->withPivot('qty')->withTimestamps();
    }

     public function orderdetail()
    {
        return $this->belongsTo('App\Orderdetail');
    }

}
