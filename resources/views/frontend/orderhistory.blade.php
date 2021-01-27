@extends('frontend_master')
@section('content')
  
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white">Your Order History </h1>
      </div>
  </div>
  

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Date</th>
              <th>Total Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($orders as $order)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$order->orderdate}}</td>
              <td>{{$order->total}}</td>
              <td>
                 @if($order->status==1)
                  <p class="text-white d-inline-block bg-warning rounded py-1 px-2">Pending</p>
                 @elseif($order->status==2)
                  <p class="text-white d-inline-block bg-success rounded py-1 px-2">Success</p>
                 @elseif($order->status==3)
                  <p class="text-white d-inline-block bg-danger rounded py-1 px-2">Cancel</p>
                 @endif
                 {{--  <a href="{{route('orderdetail',$order->id)}}" class="btn btn-outline-danger">Detail</a> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('more')
  <div class="container pt-2">
    <h4 class="mt-5">More Vendors</h4>
  <p class="text-danger">Pizza Hut   |   O Cha   |   KFC   |   Cheese O'tea   |   Bonchon   |   The Manhattan Fish Market   |   SP Bakery   |   Chilli Pot   |   Oishii Sushi La Tha   |   Yakun   |   Breadtalk   |   Innlay A Mhat Ta Ya   |   RedDot BrewHouse   |   Krispy Kreme   |   Pezzo   |   Liberty Sweets & Snacks   |   Chapayom   |   Paradise Dynasty   |   Gong Cha   |   Potato Corner
  </p>

  <hr>
  <div>Cambodia   |   Laos   |   Thailand   |   Singapore   |   Japan   |   Malaysia   |   Philippines   |   Taiwan   |   Hong Kong   |   Pakistan   |   Bangladesh   |   Bulgaria   |   Romania   |   Save Money   |   Join Us</div>

  </div>
@endsection