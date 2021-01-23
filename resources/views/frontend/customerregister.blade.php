@extends('frontend_master')
@section('content')

<div class="registerationholder">
	{{-- <img src="{{asset('customer_assets/img/customer.webp')}}" class="img-fluid w-100"> --}}
	<div class="text-center registeration ">
		<h1 class="HH display-4 text-dark pb-5 pt-3">Registeration</h1>
	</div>
</div>
<!-- login -->
	<div class="Limiter100">
		<div class="Container-register100">
			<div class="Wrap-register100">
				<div class="container">
					<form method="POST" action="{{ route('client.store') }}">
						@csrf
						{{-- <h3 class="text-center pb-5">Register Form</h3> --}}
						<div class="row">
							<div class="col-12">
								<input type="text" class="form-control form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="user name" placeholder="User name">

								 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-12 mt-3">
								<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="Email" placeholder="Email">
								 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-12 mt-3">
								<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Password">
								 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-12 mt-3">
								<input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password" placeholder="Confirm Password" required>
							</div>

							<div class="col-12 mt-3">
								<input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('email') }}" required autocomplete="phone" id="Phone" placeholder="Phone">
								 @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-12 mt-3">
								<textarea name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" required placeholder="Enter your address" rows="5"></textarea>
							</div>



							<div class="col-12 mt-3">
								<div class="form-group">
	                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required>
	                                <label for="agree-term" class="label-agree-term"><span class="Term">I agree all statements in  <a href="#" class="term-service">Terms of service</a></span></label>
	                            </div>
							</div>

							<div class="col-12">
								<div class="form-group">
	                                <label for="login" class="label-agree-term"><span class="Term">If you already have account. Please <a href="{{route('customerloginpage')}}" class="term-service">Log in.</a></span></label>
	                            </div>
							</div>
							
					
								<div class=" col-12 container-register100-form-btn">
									<div class="Wrap-register100-form-btn">
										<div class="register100-form-bgbtn"></div>
											 <input type="submit" name="submit" value="Submit" class="btn register100-form-btn btn-info">
									</div>
								</div>
								
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
		
	</div>
<!-- End login -->

@endsection