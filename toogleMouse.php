<!DOCTYPE html>
<html>
<head>
	<title>Ocultar y Mostrar</title>
	<script src="Js/jquery-2.1.4.js"></script>

	<script type="text/javascript">
		var x;
		x=$(document);
		x.ready(iniciar);
		var y=$("#objetivo");
			y.hide("slow");

		function iniciar(){
			var x=$("#Mostrar");
			x.click(muestrame);
		
		}
		function muestrame(){
			var x=$("#objetivo");
			x.toggle("slow");
		}
		


	</script>
	<style type="text/css">
		#objetivo{
			align-center;
			width: 200px;
			height: 200px;
			background-color: aquamarine;
			border: 1px solid black;
		}

	</style>
</head>
<body>

	<input type="button" id="Mostrar" value="Mostrar/Ocultar">	
	
	<div id="objetivo">Yo soy con quien vas a jugar :) :D¡¡¡¡</div>
</body>
</html>