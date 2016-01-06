<!DOCTYPE html>
<html>
<head>
	<title>Leer y Escribir</title>
	<script src="Js/jquery-2.1.4.js"></script>

	<script type="text/javascript">

		var x;
		x=$(document);
		x.ready(inicializar);

		function inicializar(){
			var x=$("#Boton1");
			x.click(leer);
			x=$("#Boton2");
			x.click(escribir);
		}

		function leer(){
			var x=$("p");
			alert(x.text());
		}

		function escribir(){
			var x=$("p");
			var texto = prompt("Ingrese Su Texto Por Favor");
			console.log(texto);
			x.text(texto);
		}

	</script>

</head>
<body>

<input type="button" id="Boton1" value="Leer Texto">
<input type="button" id="Boton2" value="Escribir Texto">
<p>Yo soy un texto</p>

</body>
</html>