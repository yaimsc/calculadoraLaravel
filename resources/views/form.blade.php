<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
	<link rel="styleshhet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}} ">
	<style type="text/css">
		header {
			background-color: lightgrey; 
		}
		h1{
			text-align: center;
			padding-top: 2%;
		}
		label{
			color: #3c3c3b;
			font-weight: bold; 
		}
		#nombre{
			width: 60%;
		}
		form{
			margin-left: 2%;
			margin-top: 2%;
		}
		p{
			font-size: 10pt;
			color: #666;
		}
	</style>
</head>
<body>
	<header>
		<h1>Calculadora Reto</h1><br>
	</header>
	<form action="calc" method="get">
		<label>Introduce tu nombre</label><br>
		<input class="form-control" type="text" name="nombre" id="nombre">
		<p>El nombre aparecera con la calculadora<p>
		<input type="submit" class="btn btn-primary" name="enviar" value="enviar">
	</form>
	<br>




</body>
</html>