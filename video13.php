<!DOCTYPE html>
<html>
<head>
	<title>Video 13</title>
	<script src="Js/jquery-2.1.4.js"></script>
	<style >

		.test{

			background-color: aquamarine;
			text-align: center;

		}
		</style>

		<script >

			$(document).on("ready", function(){

				$("div").on("click",function(){
					$("#test").toggleClass("test");

					if ($("#test").hasClass("test")) {
						$("#test").text("Hey¡¡ me hisiste Click :'(");
					}else{
						$("#test").html("Por fa... Hasme Click otra vez :D");
					}

				});

			});

		</script>

</head>
<body>

	<div id="test">Hazme Click :D</div>

</body>
</html>