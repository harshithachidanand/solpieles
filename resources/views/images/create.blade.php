@extends('layouts.admin')

@section('content')
	
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
				<div class="row ">

					<div class=col-sm-12>
						{!! Form::model($image, ['route'=>['admin.images.store'], 'method'=>'POST', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off", 'files'=>true]) !!}		
							<div class="form-group text-center">
								<legend>Adding a New Image 
									<a href="{{ route('admin.images.index') }}" class="pull-right"><i class="fa fa-list"></i></a>
								</legend>
							</div>
	
							@include('images._form')
	
							<div class="form-group">							
								<button type="submit" class="btn btn-primary col-xs-6 col-xs-offset-1">Crate</button>
								<button type="reset" class="btn btn-default col-xs-3 col-xs-offset-1">Cancel</button>
							</div>
	
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

