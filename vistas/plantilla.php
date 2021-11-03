<!DOCTYPE HTML>

<html>
	<head>
		<title>Cibermemory</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="vistas/assets/css/main.css" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
		<noscript><link rel="stylesheet" href="vistas/assets/css/noscript.css" /></noscript>
		<noscript><link rel="stylesheet" href="vistas/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

<?php include "templates/nav.php"; ?>




<?php
    $rutas = new RutasControlador();
    $rutas ->Rutas();
?>




		<!-- Footer -->
        <footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="vistas/assets/js/jquery.min.js"></script>
			<script src="vistas/assets/js/jquery.scrollex.min.js"></script>
			<script src="vistas/assets/js/jquery.scrolly.min.js"></script>
			<script src="vistas/assets/js/browser.min.js"></script>
			<script src="vistas/assets/js/breakpoints.min.js"></script>
			<script src="vistas/assets/js/util.js"></script>
			<script src="vistas/assets/js/main.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

			
	</body>
</html>
