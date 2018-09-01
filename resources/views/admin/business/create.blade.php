@extends('admin.template.main')

@section('title','Nuevo Negocio')

@section('content')
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)

					<li>
						{{ $error}}
					</li>

				@endforeach
			</ul>
			

		</div>
	@endif

<div class="container">
	<h3>Nuevo Negocio</h3>

	{!! Form::open(['route'=>'business.store', 'method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre Empresa') !!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ubicacion','Dirección') !!}
			{!! Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>'Direccion','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

	<div style="width: full; height: 250px;">
		{!! Mapper::render() !!}
	</div>


</div>
@endsection