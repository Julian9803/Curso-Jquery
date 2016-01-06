 <!DOCTYPE html>
 <html>
 <head>
 	<title>Video 15</title>
 	<script src="Js/jquery-2.1.4.js"></script>
 	
 	<script >

 		$(document).on("ready",function(){

 			$('a').on("click",function(e){

 				e.preventDefault();
 				var link = $(this).attr('href');
 				alert("Funciona si sale");
 				location.href = link;

 			});

 		});

 	</script>
 </head>
 <body>
 
 <a href="www.youtube.com">Seguime en yotube</a>

 </body>
 </html>