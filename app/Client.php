<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Client extends Model
{
    protected $fillable = 
    [
    	'phone','address','user_id'
    ];

     public function user()
    {   
        return $this->belongsTo('App\User');
    }

    public function orders()
  {
    return $this->hasMany('App\Order');
  }
}
