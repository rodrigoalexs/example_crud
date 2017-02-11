@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>	
					<th>Product name</th>
					<th>Product quantity</th>
					<th>Product value</th>
					<th><i>Options</i></th>
				</tr>
				@forelse($products as $product)
					<tr>
						<td>{{ $product['id']}}</td>
						<td>{{ $product['prodName']}}</td>
						<td>{{ $product['prodQtty']}}</td>
						<td>€ {{ $product['prodValue']}}</td>
						<td>
							<a class="btn btn-info btn-sm" href="/products/{{ $product['id']}}">Details</a>
						</td>
						
					</tr>	
				@empty
					<tr>
						<td colspan="5" class="info">
							No products registered	
						</td>	
					</tr>	
				@endforelse
				<tr>
					<td colspan="5">
						{{ $products->links()}}
					</td>		
				</tr>
			</table>
		</div>	
	</div>	

	
@endsection

