<!DOCTYPE html>
<html>
<head>
	<title>Animacion Personalizada</title>
	<script src="Js/jquery-2.1.4.js"></script>

	<script type="text/javascript">

		var x;
		x=$(document);
		x.ready(iniciar);

		function iniciar(){
			var x;
			x=$("#Animate");
			x.click(Animater)
		}

		function Animater(){
			var x;
			x=$("#Objetivo");
			x.animate({height:300},"slow");
			x.animate({width:300},"slow");
			x.animate({height:100},"2000");
			x.animate({width:300},"1500");
			x.text("Hola Mundo")
			
			
		}

	</script>
	<style type="text/css">

		#Objetivo{

			width: 200px;
			height: 200px;
			background-color: blue;
			border: 1px solid black;
		}

	</style>

</head>
<body>
	<input type="button" id="Animate" value="Pulsame Para Animar">
	<div id="Objetivo">Hola Estoy Para Jugar</div>
</body>
</html>