@extends('frontend_master')
@section('banner')
    <div>
       <img src="{{asset('frontend_asset/image/2.jpg')}}" width="100%" height="650px">
    </div>
@endsection
@section('content')
  <div class="container">
    <h3 class="text-center pt-5">Available Restaurants</h3>
    <hr width="250px">
    
   <div class="row">
     @foreach($restaurants as $restaurant)
     <div class="col-12 col-lg-4">
     <div class="card">
      <img src="{{$restaurant->photo}}" width="100%" height="200px">
      <div class="card-body">
       <h5 class="card-title">{{$restaurant->name}}</h5>
       <p class="card-text">{{$restaurant->type}}</p>
      <a href="{{route('restaurantdetail',$restaurant->id)}}" class="btn btn-outline-danger">Choose Menu</a>
      </div>
     </div>
    </div>
    @endforeach
   </div>
  
  </div>
@endsection
@section('more')
  <div class="container">
    <h4 class="mt-5">More Vendors</h4>
  <p class="text-danger">Pizza Hut   |   O Cha   |   KFC   |   Cheese O'tea   |   Bonchon   |   The Manhattan Fish Market   |   SP Bakery   |   Chilli Pot   |   Oishii Sushi La Tha   |   Yakun   |   Breadtalk   |   Innlay A Mhat Ta Ya   |   RedDot BrewHouse   |   Krispy Kreme   |   Pezzo   |   Liberty Sweets & Snacks   |   Chapayom   |   Paradise Dynasty   |   Gong Cha   |   Potato Corner
  </p>

  <hr>
  <div>Cambodia   |   Laos   |   Thailand   |   Singapore   |   Japan   |   Malaysia   |   Philippines   |   Taiwan   |   Hong Kong   |   Pakistan   |   Bangladesh   |   Bulgaria   |   Romania   |   Save Money   |   Join Us</div>

  </div>
@endsection