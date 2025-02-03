<!DOCTYPE html>
<?php echo "";?>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>404</title>
		<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="./assets/css/fontawesome/css/fontawesome.min.css"/>
		<link type="text/css" rel="stylesheet" href="./assets/css/404.css"/>
		<style>
			body{
				background-color:white;
			}
		</style>
	</head>

	<body>
		<div id="notfound">
		<div class="notfound-bg">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		</div>
		<div class="notfound">
		<div class="notfound-404">
		<h1>404</h1>
		</div>
		<h2>Page Not Found</h2>
		<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
		<a href="index.php">Homepage</a>
		<div class="notfound-social">
		<a href="#"><i class="fa fa-brands fa-facebook"></i></a>
		<a href="#"><i class="fa fa-brands fa-twitter"></i></a>
		<a href="#"><i class="fa fa-brands fa-instagram"></i></a>
		<a href="#"><i class="fa fa-brands fa-whatssapp"></i></a>
		</div>
		</div>
		</div>
		<input type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; previsualizar()">
		<span style="cursor: move;">
			<button height="200px" width="200px"></button>
		</span>
		<script>
		function previsualizar()
{
if(document.form.texto.value.length>0)
{
previo=window.open("","Previsualizar","scrollbars=1,status=1,width=640,height=320,left=100,top=100"); // -- Crea la ventana, las medidas son editables
previo.document.write(document.form.texto.value);
}
else alert('No hay nada para previsualizar') // -- Mensaje si la caja de texto no contiene ningun codigo
}
		</script>
	</body>
</html>