<!DOCTYPE html>
<html>
<head>
	<title>Video Jquery</title>
	<script src="Js/jquery-2.1.4.js"></script>

	<script >

		$(document).on("ready",function(){

			var clase  = $("#Prueba").attr("id");
			alert(clase);
			$("#Prueba").attr("class","PruebaClase");
		});

	</script>

</head>
<body>

<p id="Parrafo"><strong>Hola Jquery</strong></p>
<div id="Prueba" ></div>

</body>
</html>