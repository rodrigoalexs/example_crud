@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Edit product	
				</div>
				<div class="panel-body">
					<form method="POST" action="/products/{{ $product->id }}">
						{{ method_field('PUT') }}
						{{ csrf_field() }}
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="prodName" class="pull-right"> Name </label>	
								</div>
								<div class="col-md-9">
									<input type="text" name="prodName" class="form-control" placeholder="Product name" required="true" value="{{ $product->prodName }}">		
								</div> 
								<div class="col-md-3">
									<label for="prodQtty" class="pull-right"> Quantity </label>	
								</div>
								<div class="col-md-9">
									<input type="number" name="prodQtty" class="form-control" step="1" min="1" required="true" value="{{ $product->prodQtty }}">		
								</div>
								<div class="col-md-3">
									<label for="prodValue" class="pull-right"> Value </label>	
								</div>
								<div class="col-md-9">
									<div class="input-group">
										<div class="input-group-addon">€</div>
										<input type="number" name="prodValue" class="form-control" step="0.01" min="0" required="true" value="{{ $product->prodValue }}">	
									</div>	
								</div>	
							</div>
						</div>
						<input type="submit" class="btn btn-info pull-right" value="Update">	
					</form>	
				</div>
			</div>
		</div>	
	</div>
@endsection