<!DOCTYPE html>
<html>
<head>
	<title>Do0ble Clik</title>
	<script src="Js/jquery-2.1.4.js"></script>

	<script type="text/javascript">
		var x;
		x=$(document);
		x.ready(iniciar);

		function iniciar(){
			var x;
			x=$("#Hola");
			x.dblclick(pulsar);
		}
		function pulsar(){
			alert("Me has echo doble click :D");
		}

	</script>
</head>
<body>
	<div id="Hola">Hasme Doble Click</div>
</body>
</html>