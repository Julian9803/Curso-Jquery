<!DOCTYPE html>
<html>
<head>
	<title>Curso de Jquery</title>
	<script src="Js/jquery-2.1.4.js"></script>
	
	<script>
	$(document).on('ready',function(){
		
		$('#prueba').text('<p>Hola Mundo</p>');
		$('.prueba').html('<strong>Estoy Usando html</strong>');

	});
	</script>
</head>
<body>

<div id="prueba"></div>
<div class="prueba"></div>


</body>
</html>