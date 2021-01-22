<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link href="{{asset('frontend_asset/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/fontawesome/css/all.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg_">
            <button class="navbar-toggler" data-target="#Collapse" data-toggle="collapse">
              <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse " id="Collapse">
            <ul class="navbar-nav ml-auto mr-5">
              <li class="nav-item active"><a href="#" class="nav-link text-white">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link text-white">About</a></li>
              <li class="nav-item"><a href="#" class="nav-link text-white">Contact</a></li>
           

             @guest
                            <li class="nav-item navbar-nav">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login|') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item navbar-nav">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown navbar-nav">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="#" class="dropdown-item">Order History</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

          {{--  
          </div> --}}
        </div>
      </div>
       </ul>

        <a href="{{route('shoppingcart')}}" class="text-decoration-none d-xl-inline d-lg-inline d-md-inline d-sm-none d-none shoppingcartLink"> 
         <i class="fas fa-shopping-cart"></i> 
          <span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 0 </span>
          <span id="cartCash"></span>
        </a>
          </div>
    </nav>
  @yield('banner')
    
  @yield('content')

 @yield('more')

   <div class="container-fluid pt-4 mt-5" style="background-color: #FF5733">

        <div class="row">
            <div class="col-md-6">
                <p class="text-center text-md-left ml-5 text-white">CopyRight &copy 2021 Developed By kyawhtinoo</p>
            </div>
            <div class="col-md-6">
                <p class="text-center text-md-right mr-5">
                    <i class="fab fa-facebook-square fa-2x mx-2"></i>
                    <i class="fab fa-twitter-square fa-2x mx-2"></i>
                    <i class="fab fa-instagram-square fa-2x mx-2"></i>
                </p>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_asset/js/shoppingcart.js')}}"></script>
</html>