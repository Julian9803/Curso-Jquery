<!DOCTYPE html>
<html>
<head>
	<title>Presionar Mouse</title>
	<script src="Js/jquery-2.1.4.js"></script>
	
	<script>
	var x;
	x=$("document");
	x.ready(inicializar);

	function inicializar(){
		var x;
		x=$("#Hola");
		x.mousedown(presionar);
		x.mouseup(soltar);
	}
	function presionar(){
		$(this).css("background-color","red")
	}
	function soltar(){
		$(this).css("background-color","blue")
	}

	</script>
</head>
<body>
	<div id="Hola">Hasme Click :D.....</div>
</body>
</html>