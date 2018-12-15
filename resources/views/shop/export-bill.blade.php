<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container">
	<div class="card">
		<div class="card-body">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h4 class="mb-3">Your Information</h4>
					<div>
						<strong>Name : {{Auth::guard('users')->user()->name}}</strong>
					</div>
					@if(Auth::guard('users')->check() == null)
					<h1></h1>
					@else
					<div>Phone : {{Auth::guard('users')->user()->phone}}</div>
					<div>Email : {{Auth::guard('users')->user()->email}}</div>
					<div>Address : {{Auth::guard('users')->user()->address}}</div>
					@endif	
				</div>
			</div>

			<div class="table-responsive-sm">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="center">#</th>
							<th>Name</th>
							<td class="right">Price</td>
							<td class="center">Quantity</td>
							<td class="right">Total</td>
						</tr>
					</thead>
					<tbody>
						@foreach($information_order as $key => $list_order)
						<tr>
							<td class="center">{{$key + 1}}</td>
							<td class="left strong">{{$list_order->name}}</td>
							<td class="left">${{$list_order->price}}</td>
							<td class="right">{{$list_order->qty}} Items</td>
							<td class="center">${{$list_order->price}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-5">

				</div>

				<div class="col-lg-4 col-sm-5 ml-auto">
					<table class="table table-clear">
						<tbody>
							<tr>
								<td class="left">
									<strong>Shipping</strong>
								</td>
								<td class="right">
									@if($get_shipping->shipping == 0)
									0
									@elseif($get_shipping->shipping == 25)
									+25
									@elseif($get_shipping->shipping == 75)
									+75
									@endif
								</td>

								<tr>
									<td class="left">
										<strong>Total Price</strong>
									</td>
									<td class="right">
										<strong>${{$get_shipping->total}}</strong>
									</td>
								</tr>
							</tbody>
						</table>

					</div>

				</div>

			</div>
		</div>
	</div>