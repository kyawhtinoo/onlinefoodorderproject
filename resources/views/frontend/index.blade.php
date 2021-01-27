@extends('frontend_master')
@section('banner')
    <div>
       <img src="{{asset('https://food.bolt.eu/og-img.jpg')}}" width="100%" height="600px">
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
      <a href="{{route('restaurantdetail',$restaurant->id)}}" class="btn btn-outline-danger Choose_menu">Choose Menu</a>
      </div>
     </div>
    </div>
    @endforeach
   </div>
  
  </div>
  <div class="container">
    <h4 class="mt-5">More Vendors</h4>
  <p class="text-danger">Pizza Hut   |   O Cha   |   KFC   |   Cheese O'tea   |   Bonchon   |   The Manhattan Fish Market   |   SP Bakery   |   Chilli Pot   |   Oishii Sushi La Tha   |   Yakun   |   Breadtalk   |   Innlay A Mhat Ta Ya   |   RedDot BrewHouse   |   Krispy Kreme   |   Pezzo   |   Liberty Sweets & Snacks   |   Chapayom   |   Paradise Dynasty   |   Gong Cha   |   Potato Corner
  </p>

  <hr>
  <div>Cambodia   |   Laos   |   Thailand   |   Singapore   |   Japan   |   Malaysia   |   Philippines   |   Taiwan   |   Hong Kong   |   Pakistan   |   Bangladesh   |   Bulgaria   |   Romania   |   Save Money   |   Join Us</div>

  </div>

  <!-- contact us -->
  <h2 class="HH mb-5 mt-5" align="center">Contact Us</h2>
  <!-- Text of Contact us -->
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <div class="Contact-Us text-center">
              <span>
                 Contanct to us, if you need for help and feedback...The DSer Customer Care Centre is always happy to help you.
              </span>
            </div>
          </div>
        </div>
    </div>

  <div class="container ABOUTUS">
    <div class="row">
    <!-- Phone number -->
      <div class="col-sm-12 col-lg-6">
        <div class="mt-5" align="center">
          <table>
            <tbody>
              <tr>
                <td><i class="fas fa-phone-square-alt fa-lg mr-2"></i></td>
                <td><span class="CONTACT mr-2">Call Us</span><span class="CONTACT-TWO">| Head Office</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-THREE">Reschedule or Cancle Booking</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-ONE">09-087765686 | 09-267788987</span></td>
              </tr>
              <tr class="CONTACT-ONE">
                <td></td>
                <td><span class="CONTACT-ONE">7 Days a Week | 8:30AM - 11PM EST</span></td>
              </tr>

              <tr><td><br></td></tr>
              <tr>
                <td><i class="fas fa-phone-square-alt fa-lg mr-2"></i></td>
                <td><span class="CONTACT mr-2 mt-5">Call Us</span><span class="CONTACT-TWO">| Domestic Courier</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-THREE">Tracking & Customer Support</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-ONE">09-888765421 | 09-789876523 | 01-2231454</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-ONE">7 Days a Week | 8:30AM - 11PM EST</span></td>
              </tr>

              <tr><td><br></td></tr>
              <tr>
                <td><i class="fas fa-phone-square-alt fa-lg mr-2"></i></td>
                <td><span class="CONTACT mr-2 mt-5">Call Us</span><span class="CONTACT-TWO">| International Courier</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-THREE">Tracking & Customer Support</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-ONE">09-9988765 | 09-22344555 | 01-2345678</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-ONE">7 Days a Week | 8:30AM - 11PM EST</span></td>
              </tr>
                
              <tr><td><br></td></tr>
              <tr>
                <td><i class="fas fa-sms fa-lg mr-2"></i></td>
                <td><span class="CONTACT">Chat With Us</span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="CONTACT-ONE">7 Days a Week | 6AM - 11PM EST</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <!-- end phone number -->

    <!-- Feedback Form -->
      <div class="col-sm-12 col-lg-6 FEEDBACK-FORM">
        <form action="#" method="#" class="mt-5 border border-1">
          <div class="container">
            <div class="row">
              <div class="col-6 mt-3">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div>
              <div class="col-6 mt-3">
                <input type="text" class="form-control" placeholder="Second name" aria-label="Second name">
              </div>

              <div class="col-12 mt-3">
                <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number">
              </div>

              <div class="col-12 mt-3">
                <input type="email" class="form-control" placeholder="Email" aria-label="Email">
              </div>

              <div class="col-12 mt-3">
                <textarea class="form-control Textarea" placeholder="Message:" required></textarea>
              </div>

              <div class="col-3 mt-3 mb-3">
                <input type="submit" name="btn-submit" value="Submit" class="btn btn-outline-primary">
                
              </div>


            </div>
           
          </div>
        </form>     
      </div>
    <!-- end Feedback Form -->
    </div>
  </div>
  
@endsection
