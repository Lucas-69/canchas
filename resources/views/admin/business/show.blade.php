@extends('admin.template.main')

@section('title','Vista')

@section('content')

<div class="container">
	<h3><i>{{$busines->name}}</i></h3>	

	<div style="width: full; height: 250px;">
		<h4>Direccion: <i>{{$busines->ubicacion}}</i> </h4>
		{!! Mapper::render() !!}
	</div>


</div>
@endsection