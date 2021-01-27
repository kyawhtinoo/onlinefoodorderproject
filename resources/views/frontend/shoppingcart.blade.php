@extends('frontend_master')
@section('content')
   <div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-black"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{route('index')}}" class="btn mainfullbtncolor btn-outline-danger float-right px-3" > 
					
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						
					</tbody>
					<tfoot id="shoppingcart_tfoot">
						<tr>
							<td colspan="8">
								<h3 class="text-right Total_amount"> Total :</h3>
							</td>
						</tr>
						<tr> 
							<td colspan="5"> 
								<textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="3">
                                @guest
								<a href="{{route('customerloginpage')}}" class="btn  btn-secondary btn-block mainfullbtncolor">
									Login to Check Out 
								</a>
                                @else
								<button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn"> 
									Check Out 
								</button>
								@endguest
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			<div class="col-12">
				<h5 class="text-center"> There are no items in this cart </h5>
			</div>

			<div class="col-12 mt-5 ">
				<a href="categories" class="btn btn-outline-danger mainfullbtncolor px-3" > 
					
					Continue Shopping 
				</a>
			</div>

		</div>
		

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
          <a href="{{-- {{route('indexpage')}} --}}" class="btn btn-primary">OK</a>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('kho')
  <script type="text/javascript">
  	$(document).ready(function(){
  		$.ajaxSetup({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
        
        $('.checkoutbtn').click(function(){
        let ls    = localStorage.getItem("itemlist");
        let lsArr =JSON.parse(ls);
        console.log(lsArr);
        let total =lsArr.reduce((acc,row)=>acc + (row.price*row.qty),0);
        let notes = $('#notes').val();
        $.post("{{route('orders.store')}}",{ls:ls,notes:notes,total:total},function (response) {
           localStorage.clear();
           $('#exampleModal').modal('show');
        });
      });

  	});
  </script>
@endsection