<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Item;
use App\Order;
use Auth;
use Orderdetail;


class FrontendController extends Controller
{
   public function index($value='')
   {
    $restaurants=Restaurant::orderby('id','desc')->get();
    return view('frontend.index',compact('restaurants'));
   }

   public function shoppingcart($value='')
   {
    return view('frontend.shoppingcart');
   }

   public function restaurantdetail($id,$value='')
   {
    $restaurants=Restaurant::where('id',$id)->get();
    $items=Item::where('restaurant_id',$id)->orderby('created_at','desc')->get();
    return view('frontend.restaurantdetail',compact('items','restaurants'));
   }

    public function customerlogin($value=''){
      return view ('frontend.customerlogin');
    }
     public function customerregister($value=''){
      return view ('frontend.customerregister');
    }

     public function orderhistory($value='')
   {
    
   $orders =Order::where('client_id',Auth::id())->orderBy('id','desc')->get();
    return view('frontend.orderhistory',compact('orders',));
   }
   
    public function orderdetail($id,$value='')
   {
    $order=Order::where('client_id',Auth::id())->orderBy('id','desc')->get();
    // $orderdetail=Orderdetail::all();
    $items=Item::all();
    return view('frontend.orderdetail',compact('order','items'));
   }
}
