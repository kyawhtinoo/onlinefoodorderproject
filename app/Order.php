<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orderdetail;

class Order extends Model
{
     protected $fillable=[
     	'orderdate','client_id','item_id','qty','total','status','orderno','note'
     ];

      public function items($value='')
    {
       return $this->belongsToMany('App\Item','orderdetails')->withPivot('qty')->withTimestamps();
    }

      public function user($value='')
    {
    	return $this->belongsTo('App\user');
    }

    public function client($value='')
    {
        return $this->belongsTo('App\Client');
    }

      public function orderdetail()
    {
        return $this->hasOne('App\Orderdetail');
    }
    
}
