@extends('admin.template.main')

@section('title','Nuevo Turno')

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
	<h3>Nuevo Turno</h3>



















</div>
@endsection
