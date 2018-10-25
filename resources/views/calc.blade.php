<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href=" {{ asset('css/bootstrap.min.css')}} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}} ">
	<style type="text/css">
		header {
			background-color: lightgrey; 
		}
		h1{
			text-align: center;
			padding-top: 2%;
			padding-bottom: 2%;
		}
		label{
			color: #3c3c3b;
			font-weight: bold; 
		}
		form{
			margin-left: 2%;
		}
		#num{
			width: 60%;
			margin-bottom: 
		}
		#boton{
			margin-left: 3%; 
		}
		h2{
			margin-top: 10%;
		}
		#alert{
			width:60%;
		}
		#container{
			margin: 2%;
		}
		

	</style>
</head>
<body>
	<header>
	<h1>Calculadora de {{ $nombre }} </h1>
	</header>
	<div class="row" id="container">
		<div class="col-md-8">
			<form action="calc" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
				<label>Numero 1</label><br><input class="form-control" type="number" name="num1" id="num">
				<label>Numero 2</label><br><input class="form-control" type="number" name="num2" id="num">
				<br>
				<input type="hidden" name="nombre" value="{{ $nombre }}">
				<input type="submit" id="boton" class="btn btn-primary" name="boton" value="sumar">
				<input type="submit" id="boton" class="btn btn-success" name="boton" value="restar">
				<input type="submit" id="boton" class="btn btn-danger" name="boton" value="multiplicar">
				<input type="submit" id="boton" class="btn btn-info" name="boton" value="dividir"><br>

			</form>
		</div>
		<div class="col-md-4" id="resultado">
		<h2>Resultado: </h2><br>

		@if(isset($_POST['boton']))
			@if(!$error)
			<h4>{{ $resultado }}</h4>
			@else
			<h3>#ERROR</h3>
			<div class="alert alert-danger" role="alert" id="alert">
				{{ $error }}	
			</div>
			@endif
		@endif
		</div>
	</div>
</body>
</html>