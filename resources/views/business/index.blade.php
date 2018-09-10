@extends('business.template.main')

@section('title', 'Inicio')

@section('content')
	<a href=" {{route('businessUsers.create')}} " class="btn btn-warning">
	Registrar mi Empresa</a>

	<a href=" {{route('fields.create')}} " class="btn btn-warning">
	Nueva Cancha</a>
	<br>
	<br>
	<div class="align-self-center">		
		@if(count($canchas)==0)
		<h3>No hay Canchas para mostrar</h3>
		@else
		<div class="row">			
			@foreach($canchas as $field)
			<div class="col-md-4">
				<a href="{{route('fields.edit',$field->id)}}" type="button" class="btn btn-warning btn-circle btn-lg float-edit"><i class="glyphicon glyphicon-pencil"></i></a>

				<a href="{{route('fields.destroy',$field->id)}}" type="button" class="btn btn-danger btn-circle btn-lg float-remove"><i class="glyphicon glyphicon-remove"></i></a>
				<a class="a-field" href="{{route('fields.show',$field->id)}}"> 
				<div class="sheet_fields" >
					<img class="sheet_img" type="image/svg" src="/image/football-field.svg" alt="imagen cancha">

					<h4> N°:{{$field->id}} </h4>
					<h5> Cantidad de Jugadores: {{$field->cantidad_jugadores}} </h5>
					<h5> Precio: ${{$field->precio}} </h5>


				</div><br>
				</a>	
			</div>
			@endforeach

		</div>

		@endif
	</div>
@endsection