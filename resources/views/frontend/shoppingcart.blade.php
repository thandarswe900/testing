@extends('frontend.master')

@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				
				<a href="{{route('mainpage')}}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 

					<i class="icofont-shopping-cart"></i>
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
							<th> Subtotal </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						

					</tbody>
					<tfoot id="shoppingcart_tfoot">
						<tr>
					<td colspan="8">
					<h3 class="text-right">Total:<span id="total"> </span>Ks</h3>
					</td>
				</tr>
				<tr>
					<td colspan="5">
						<textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
					</td>
					<td colspan="3">
						@role('Customer')
						<button class="btn btn-secondary btn-block mainfullbtncolor buy_now">Checkout</button>
						@else
						<a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor">Login To Checkout</a>
						@endrole
					</td>
				</tr>
						
					</tfoot>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		
		<div class="row mt-5 noneshoppingcart_div text-center">
			
		</div>

	</div>
@endsection