@extends('admin.template.main')

@section('title','Nueva Cancha')

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

</div>
@endsection