@extends('admin.template.main')

@section('title','Nuevo Negocio')

@section('content')
<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)

				<li>
					{{ $error}}
				</li>

			@endforeach
		</ul>
		

	</div>
	
<div class="container">
	<h3>Nuevo Negocio</h3>


</div>
@endsection