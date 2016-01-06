<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Ejemplo Total Ajax</title>
	<script src="../Js/jquery-2.1.4.js"></script>

	<script type="text/javascript">

		var x;
		x=$(document);
		x.ready(inicio);

		function inicio(){
			var x;
			x=$("#enviar");
			x.click(enviar)
		}

		function enviar(){
			var v=$("#numero").attr("value");
			$.ajax({

				async: true,
				type: "POST",
				dataType: "HTML",
				contentType: "application/x-www-form--urlencoded",
				url:"procesar.php",
				data:"anio="+v,
				beforeSend:inicioEnvio,
				success:llegada,
				timeout:4000,
				
			});
			return false;
		}
		function inicioEnvio(){
			var x=$("#resultados");
			x.html('Cargando....');
		}
		function llegada(datos){
			$("#Resultados").text(datos);
		}


	</script>

</head>
<body>
Dime un Año para Sumarlo<br>
<input type="number" name="anio" id="numero">
<input type="submit" id="enviar" value="Click para sumar">
<div id="Resultados"></div>
</body>
</html>