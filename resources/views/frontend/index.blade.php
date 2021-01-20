@extends('frontend_master')
@section('banner')
    <div>
       <img src="{{asset('frontend_asset/image/2.jpg')}}" width="100%" height="650px">
    </div>
@endsection
@section('content')
  <div class="container">
    <h3 class="text-center pt-5">Restaurant</h3>
    <hr width="250px">
    
   <div class="row">
    <div class="col-12 col-lg-4">
     <div class="card">
      <img src="image/1.jpg" class="card-img-top">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('restaurantdetail')}}" class="btn btn-outline-danger">Go somewhere</a>
      </div>
     </div>
    </div>
     <div class="col-12 col-lg-4">
     <div class="card">
      <img src="..." class="card-img-top">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-outline-danger">Go somewhere</a>
      </div>
     </div>
    </div>

     <div class="col-12 col-lg-4">
     <div class="card">
      <img src="..." class="card-img-top">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-outline-danger">Go somewhere</a>
      </div>
     </div>
    </div>

   </div>
  </div>

  <div class="container">
    <h3 class="text-center pt-5">Discount Restaurant</h3>
    <hr width="250px">
    
   <div class="row">
    <div class="col-12 col-lg-4">
     <div class="card">
      <img src="..." class="card-img-top">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-outline-danger">Go somewhere</a>
      </div>
     </div>
    </div>
     <div class="col-12 col-lg-4">
     <div class="card">
      <img src="..." class="card-img-top">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-outline-danger">Go somewhere</a>
      </div>
     </div>
    </div>

     <div class="col-12 col-lg-4">
     <div class="card">
      <img src="..." class="card-img-top">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-outline-danger">Go somewhere</a>
      </div>
     </div>
    </div>

   </div>
  </div>
@endsection