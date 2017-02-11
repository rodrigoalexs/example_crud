@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Product description	
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">ID</div>
						<div class="col-md-9">{{ $product->id }}</div>
						<div class="col-md-3">Name</div>
						<div class="col-md-9">{{ $product->prodName }}</div>
						<div class="col-md-3">Quantity</div>
						<div class="col-md-9">{{ $product->prodQtty}}</div>
						<div class="col-md-3">Value</div>
						<div class="col-md-9">€ {{ $product->prodValue }}</div>
						<div class="col-md-3">Registred at</div>
						<div class="col-md-9">{{ $product->created_at->format('d/m/Y H:i:s') }}</div>
						<div class="col-md-3">Updated at</div>
						<div class="col-md-9">{{ $product->updated_at->format('d/m/Y H:i:s') }}</div>	
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-md-6">
							<a href="/products/{{ $product->id }}/edit" class="btn btn-info btn-sm pull-right"> Edit </a>
						</div>
						<div class="col-md-6">
							<form action="/products/{{ $product->id }}" method="POST" class="pull-left">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button class="btn btn-danger btn-sm">Delete</button>						
								
							</form>
						</div>
					</div>	
					
					

				</div>
			</div>
		</div>
	</div>
@endsection