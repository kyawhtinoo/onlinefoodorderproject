@extends('frontend_master')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white">Your Order Detail History </h1>
      </div>
  </div>
  

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
             
              <th>Name</th>
              <th>Photo</th>
              <th>Restaurant Name</th>
              <th>Price</th>
              
            </tr>
          </thead>
          <tbody>
              @foreach($order as $item)
                      {{-- @php 
                      $qty = $item->pivot->qty;
                      $subtotal = $item->price*$qty; 
                      @endphp --}}
                      <tr>
                       {{--  <td>{{$qty}}</td> --}}
                        <td>{{$item->name}}</td>
                       
                        <td>{{$item->price}}</td>
                        {{-- <td>{{$subtotal}}</td> --}}
                      </tr>
                      @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection