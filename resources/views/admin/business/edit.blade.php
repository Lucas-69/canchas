@extends('admin.template.main')

@section('title','Editar Negocio: '.$busines->name)

@section('content')
<div class="container">
	<h3>Editar Negocio <i>{{$busines->name}}</i></h3>

	{!! Form::open(['route'=>['business.update', $busines->id], 'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre Empresa') !!}
			{!! Form::text('name',$busines->name,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ubicacion','Dirección') !!}
			{!! Form::text('ubicacion',$busines->ubicacion,['class'=>'form-control','placeholder'=>'Direccion','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

	<div style="width: full; height: 250px;">
		{!! Mapper::render() !!}
	</div>
	
</div>
@endsection