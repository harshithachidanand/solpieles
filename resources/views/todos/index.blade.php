
@extends('layouts.admin')

@section('content')
	<div class="container">

			{{-- {{ dd($todos)->toJson() }} --}}
			<?php 
				$pending = [];
				$completed = [];

				foreach ($todos as $value){
					if ($value->done) {
						array_push($completed, $value);
					} else {
						array_push($pending, $value);
					}				
				}
			 ?>
		<div class="col-sm-8 col-sm-push-4">
			@if (count($pending) > 0)
				<div class="table-responsive">
					
					<h1 class="page-header text-center text-warning">Tus Tareas Pendientes</h1>
					<table class="table table-condensed table-hover animated fadeInUp">
						<thead>
							<tr>
								<th>Tarea:</th>
								<th>Programada Para:</th>
								<th colspan="2">Estado:</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($pending as $todo)
								<tr class="{{ $todo->done ? 'success' : '' }}">
									<td><a href="{{ route('admin.todos.show', $todo->id) }}">{{ $todo->name }}</a></td>
									<td class="col-xs-3">{{ $todo->due }}</td>
									<td class="col-xs-1">
										@if ($todo->done)
											<a href="{{ route('admin.todos.incompletar', $todo->id) }}" class="text-success"><i class="fa fa-check-circle-o"></i></a>
										@else
											<a href="{{ route('admin.todos.completar', $todo->id) }}" class="text-warning"><i class="fa fa-circle-o"></i></a>
										@endif								
									</td>
									<td class="col-xs-1">
										{!! delete_button('admin.todos.destroy', $todo->id) !!}							
									</td>
								</tr>							
							@endforeach
						</tbody>
					</table>					
				</div>
			@endif
			{{-- Completed --}}
			@if (count($completed) > 0)
				<div class="table-responsive">
					<h1 class="page-header text-center text-info">Tareas Completadas</h1>
					<table class="table table-condensed table-hover animated fadeInDown">
						<thead>
							<tr>
								<th>Tarea:</th>
								<th>Programada Para:</th>
								<th colspan="2">Estado:</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($completed as $todo)
								<tr class="{{ $todo->done ? 'success' : '' }}">
									<td><a href="{{ route('admin.todos.show', $todo->id) }}"><s>{{ $todo->name }}</s></a></td>
									<td class="col-xs-3"><s>{{ $todo->due }}</s></td>
									<td class="col-xs-1">
										@if ($todo->done)
											<a href="{{ route('admin.todos.incompletar', $todo->id) }}" class="text-success"><i class="fa fa-check-circle-o"></i></a>
										@else
											<a href="{{ route('admin.todos.completar', $todo->id) }}" class="text-warning"><i class="fa fa-circle-o"></i></a>
										@endif								
									</td>
									<td class="col-xs-1">
										{!! delete_button('admin.todos.destroy', $todo->id) !!}							
									</td>
								</tr>						
							@endforeach
						</tbody>
					</table>	
					
				</div>
			@endif
			{!! $todos->render() !!}
		</div>	
		<div class="col-sm-4 col-sm-pull-8 animated rotateInUpLeft">
			@include('todos.create')
		</div>	

		
	</div>

	
@endsection