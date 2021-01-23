@extends('frontend_master')
@section('content')


	
	
	<!-- login -->
	<div class="container">
	<div class="Limiter">
		<div class="Container-login100">
			<div class="Wrap-login100">
				<form method="POST" action="{{ route('login') }}">
                     @csrf
					<span class="Login100-form-title p-b-48">
						<h1 class="text-center pt-4">Login</h1>
					</span>
					<div class="wrap-input100 validate-input mt-5 form-group" data-validate="Valid email is: @gmail.com">
						<input type="text" name="email" class="form-control input100 mt-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="Email"></span>
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="wrap-input100 validate-input form-group" data-validate="Enter Password">
						<span class="btn-show-pass"><i class="zmdi zmdi-eye-off"></i></span>
						<input type="password" class="form-control input100 mt-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn text-center">
							<div class="login100-form-bgbtn"></div>
							<!-- <button class="">login</button> -->
							{{-- <a href="#" class="btn login100-form-btn">Login</a> --}}
							<input type="submit" name="btn" value="LOGIN" class="text-white btn login100-form-btn btn-info">
						</div>
					</div>

					<div class="text-center p-t-90">
						<span class="txt1">Don't you have an account?</span>
						<a class="txt2" href="{{route('customerregisterpage')}}"> Sign Up
						</a>
					</div>
					
				</form>
				
			</div>
		</div>
		
	</div>
	</div>
<!-- End login -->

@endsection