<!DOCTYPE html>
<html>
<head>
	<title>Mover Mouse</title>
	<script src="Js/jquery-2.1.4.js"></script>
	
	<script type="text/javascript">
		var x;
		x=$(document);
		x.ready(inicializar)

		function inicializar(){
			var x;
			x=$(document);
			x.mousemove(moverRaton)
		}
		function moverRaton(){
			var x;
			x=$("#x")
			x.text("Cooredenda x= "+event.clientX);
			x=$("#y")
			x.text("Coordenada y= "+event.clientY)
		}

	</script>
</head>
<body>
	<div id="x"></div>
	<div id="y"></div>
</body>
</html>