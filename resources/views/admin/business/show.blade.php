@extends('admin.template.main')

@section('title','Empresa: '.$busines->name)

@section('content')

<div class="container">
	<h3><i>{{$busines->name}}</i></h3>	
	<h4>Direccion: <i id="address">{{$busines->ubicacion}}</i> </h4>
		


	<div id="map" style="width: full; height: 250px;"></div> <br>


</div>
@endsection

@section('js')
<script>/*
	function initMap() {
	        var myLatLng = {lat: -34.614515589711445, lng: -68.36426334929843};

	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 4,
	          center: myLatLng
	        });

	        var marker = new google.maps.Marker({
	          position: myLatLng,
	          map: map,
	          title: 'Hello World!'
	        });
	      }*/

	var map;
	function initMap() {
		var myLatLng = {lat:  {{$busines->latitude}} , lng:  {{$busines->longitude}} };
		//var myLatLng = {lat: -68.36426334929843, lng: -68.36426334929843};
		console.log(myLatLng);
	    map = new google.maps.Map(document.getElementById('map'), {
			center: myLatLng,
	    	zoom:18
	    });

	    var marker = new google.maps.Marker({
	      position: myLatLng,
	      map: map,
	    });

	    var infowindow = new google.maps.InfoWindow({
	      content: 'Empresa: {{$busines->name}} '
	    });
	    infowindow.open(map,marker);
	    


	}
	 
</script>
@endsection





















