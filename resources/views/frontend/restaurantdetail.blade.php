@extends('frontend_master')
@section('content')
  @foreach($restaurants as $restaurant)
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <img src="{{$restaurant->photo}}"class="h-20">
        <h2 style="padding-left: 100px; padding-top: 30px;">{{$restaurant->name}}</h2>
        <p style="padding-left: 100px;" class="text-info">$$$ {{$restaurant->type}}</p>
        <div class="star-rating" style="padding-left: 100px">
                  <ul class="list-inline">
                    <li class="list-inline-item px-1"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item px-1"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item px-1"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item px-1"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item px-1"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
       </div>
      </div>
   </div>
  </div>
  @endforeach
  <div class="container mt-5">
    <h3 class="pb-2">Main Menu</h3>
   <div class="row">
   	@foreach($items as $item)
    <div class="col-6 col-md-4 col-lg-4 mb-5">
   	<a href="#" class="text-decoration-none text-dark addtocartBtn"
       data-id="{{$item->id}}"
       data-name= "{{$item->name}}"
       data-price="{{$item->price}}" 
       data-discount="{{$item->discount}}" 
       data-photo="{{$item->photo}}">
      <div class="card shadow">
   			<div class="row">
   				<div class="col-lg-6">
   					<img src="{{$item->photo}}" class=" w-75 h-100  p-2">
   				</div>
   				<div class="col-lg-6 p-2 pl-4">
   					{{-- <div>Restaurant Name:{{$item->restaurant->name}}</div> --}}
            <div>{{$item->name}}</div>
   					<div>{{$item->description}}</div>
   					@if($item->discount)
             MMK {{number_format($item->discount)}}
            <p class="text-black-50 d-inline-block"><strike>{{number_format($item->price)}}</strike>
            @elseif($item->discount==0)
             MMK {{number_format($item->price)}}  
            @endif
   				  </div>
          </div>
        </div>
        </a>
      </div>
 @endforeach
 </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Order Successful!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-primary">OK</a>
        </div>
      </div>
    </div>
  </div>

  <h4 style="margin-top: 100px;">More Vendors</h4>
  <p class="text-danger">Pizza Hut   |   O Cha   |   KFC   |   Cheese O'tea   |   Bonchon   |   The Manhattan Fish Market   |   SP Bakery   |   Chilli Pot   |   Oishii Sushi La Tha   |   Yakun   |   Breadtalk   |   Innlay A Mhat Ta Ya   |   RedDot BrewHouse   |   Krispy Kreme   |   Pezzo   |   Liberty Sweets & Snacks   |   Chapayom   |   Paradise Dynasty   |   Gong Cha   |   Potato Corner
  </p>

  <hr>
  <div>Cambodia   |   Laos   |   Thailand   |   Singapore   |   Japan   |   Malaysia   |   Philippines   |   Taiwan   |   Hong Kong   |   Pakistan   |   Bangladesh   |   Bulgaria   |   Romania   |   Save Money   |   Join Us</div>


</div>
@endsection
{{-- @section('script')
  <script type="text/javascript">
    $(document).ready(function(){
       $('.Modal_restaurant').click(function(){
        $('#exampleModal').modal('show');
        alert('ok');
       });
    });
  </script>
@endsection --}}