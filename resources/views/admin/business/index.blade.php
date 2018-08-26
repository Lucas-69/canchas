@extends('admin.template.main')

@section('title','Lista de Negocios')

@section('content')


<div class="container">
	<h3>Nuevo Negocio</h3>
	<a href=" {{route('business.create')}} " class="btn btn-warning"> Crear Nuevo</a>
	
	<table class="table table-striped">
	  <thead>
	    <tr>
	    	<th>ID</th>
	      <th>Nombre</th>
	      <th>#</th>
	      <th>#</th>
	    </tr>
	  </thead>
	  <tbody>
		@if(empty($business))
			<tr>
				<td></td>
				<td>No hay usuarios para Mostrar</td>
				<td></td>
				<td></td>
			</tr>
		@else
			@foreach($business as $business)
			<tr>				
				<td> {{$business->id}} </td>
				<td> {{$business->name}} </td>
				<td>
        		@if($business->type == "encargado")
          		<span class="label label-success">{{ $business->type }}</span>
        		@endif
          	
				<td> <a href="{{ route('business.edit', $business->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a><a href="{{ route('business.destroy', $business->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a> </td>
			</tr>
			@endforeach
		@endif

	  	
	  </tbody>
	</table>


</div>
@endsection