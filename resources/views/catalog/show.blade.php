<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@extends('layouts.master')

	@section('content')

	    <div class="row">

		    <div class="col-sm-4">
		        {{-- TODO: Imagen de la película --}}

		    </div>
		    <div class="col-sm-8">

		        {{-- TODO: Datos de la película --}}

		        <button type="button" class="btn btn-primary">Alquilar pelicula</button>
		        <button type="button" class="btn btn-danger">Devolver pelicula</button>
		        <button type="button" class="btn btn-warning">Editar pelicula</button>
		        <button type="button" class="btn btn-default">Volver</button>


		    </div>
		</div>

	@stop

</body>
</html>