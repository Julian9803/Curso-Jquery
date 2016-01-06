<!DOCTYPE html>
<html>
<head>
	<script src="Js/jquery-2.1.4.js"></script>
	<title>Evento collback</title>
	<script type="text/javascript">
		var x;
		x=$(document);
		x.ready(inicio);

		function inicio(){
			var x;
			x=$("#escondeme");
			x.click(esconder);
		}
		function esconder(){
			var x;
			x=$("#rectangulo")
			x.text("Me estoy escondiendo");
			x.html("")
			x.hide(4000, function(){alert("Me escondi completamente :(.....")});
		}

	</script>
	<style type="text/css">
		#rectangulo{
			width: 500px;
			height: 300px;
			background: blue;			
			border: 1px solid black;

		}

	</style>
</head>
<body>
	<input type="button" id="escondeme" value="Escondeme">
	<div id="rectangulo"></div>
</body>
</html>