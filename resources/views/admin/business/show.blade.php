@extends('admin.template.main')

@section('title','Empresa: '.$busines->name)

@section('content')

<div class="container">
	<h3><i>{{$busines->name}}</i></h3>	
	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
	  Nueva Cancha
	</button>
		<br>
		<br>
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="exampleModalLongTitle"> Agregar Cancha  <a style="float: right" data-dismiss="modal" class="btn btn-danger" > <i class="glyphicon glyphicon-remove"></i> </a> </h3>
			       
			        
			      </div>
			      <div class="modal-body">
			        
					<div>
					
						{!! Form::open(['route'=>'courts.store', 'method'=>'POST']) !!}

							<div class="form-group" style="display: none;">
								{!! Form::text('company_id',$busines->id,['class'=>'form-control','placeholder'=>'Cantidad de Jugadores','required']) !!}
							</div>
							

							<div class="form-group">
								{!! Form::label('cantidad_jugadores','Cantidad de Jugadores*') !!}
								{!! Form::text('cantidad_jugadores',null,['class'=>'form-control','placeholder'=>'Cantidad de Jugadores','required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('precio','Precio*') !!}
								{!! Form::text('precio',null,['class'=>'form-control','placeholder'=>'Precio','required']) !!}
							</div>

							<div class="modal-footer">
								<div class="form-group" >
									{!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
								</div>
							</div>

						{!! Form::close() !!}
					</div>
			    </div>
			  </div>
			</div>
		</div>

		<div>
			<div>
									
				@foreach($busines->fields as $field) 
					<img width="250" height="auto" type="image/svg" src="/image/football-field.svg" alt=" imagen cancha">
									
					<h4> {{$field->id}} </h4> 

				@endforeach
				
			</div>

		</div>

</div>
@endsection