<!DOCTYPE html>
<html>
<head>
	<title>Load con Ajax</title>
	<script src="../Js/jquery-2.1.4.js"></script>

	<script>
		var x;
		x=$(document);
		x.ready(inicio);

		function inicio(){
			var x;
			x=$("a");
			x.click(leer);
		}
		function leer(){
			var pagina=$(this).attr("href");
			var x=$("#Hablame");
			x.load(pagina);
			return false;
		}

	</script>

</head>
<body>
<a href="Colores.php?Color=Verde">Hablame de verde</a>
<a href="Colores.php?Color=Azul">Hablame de Azul</a>
<a href="Colores.php?Color=Rojo">Hablame de Rojo</a>

<div id="Hablame"></div>

</body>
</html>