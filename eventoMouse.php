<!DOCTYPE html>
<html>
<head>
	<title>Eventos</title>
		<script src="Js/jquery-2.1.4.js"></script>
		
		<script type="text/javascript">
			var x;
			x=$(document);
			x.ready(inicializar);

			function inicializar(){
				var x;
				x=$("#Pasame");
				x.mouseover(entrada);
				x.mouseout(salida);

				//Una Funcion para simplificar estos eventos es: Hover
				//x.hover(entrada,salida);

				function entrada(){
					$(this).text("Me has Pasado Por Encima ¡¡ :3");
				}

				function salida(){
					 $(this).text("ohhh :'(¡¡¡ Pasame por encima otra vez :D")
				}
			}
		</script>
</head>
<body>
	<h2 id="Pasame">Pasame el Mouse por encima :D :3</h2>
</body>
</html>