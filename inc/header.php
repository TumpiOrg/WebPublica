<?php
	/*
		Aqui se crea la header de nuestra pagina web. A la hora de querer modificaciones dinamicas en el header podremos crear un arbol de directorios
		para poder incluir dinamicamente distintas cosas en el header.
	*/
?>
<!DOCTYPE>
<html>
	<head>
	<?php //Title ?>
		<title>Tumpi</title>
	<?php //Metas ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
    <?php //Css ?>
		<link href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="libs/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="inc/css/global.css" rel="stylesheet" type="text/css" media="screen">

		<link href="inc/css/prueba_less.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
		<style id="holderjs-style" type="text/css">
		.holderjs-fluid
		{
			font-size:16px;
			font-weight:bold;
			text-align:center;
			font-family:sans-serif;
			margin:0;
		}
		</style>
		<?php //JavaScript ?>
		<script src="libs/jquery/jQuery.js"></script>
		<script src="libs/bootstrap/js/bootstrap-transition.js"></script>
		<script src="libs/bootstrap/js/bootstrap-alert.js"></script>
		<script src="libs/bootstrap/js/bootstrap-modal.js"></script>
		<script src="libs/bootstrap/js/bootstrap-dropdown.js"></script>
		<script src="libs/bootstrap/js/bootstrap-scrollspy.js"></script>
		<script src="libs/bootstrap/js/bootstrap-tab.js"></script>
		<script src="libs/bootstrap/js/bootstrap-tooltip.js"></script>
		<script src="libs/bootstrap/js/bootstrap-popover.js"></script>
		<script src="libs/bootstrap/js/bootstrap-button.js"></script>
		<script src="libs/bootstrap/js/bootstrap-collapse.js"></script>
		<script src="libs/bootstrap/js/bootstrap-carousel.js"></script>
		<script src="libs/bootstrap/js/bootstrap-typeahead.js"></script>
		<script src="libs/holder.js"></script>

		<!-- Esto es para tener Less del lado del cliente. Sirve por si pasara algo como remedio alternativo -->
		<!-- script src="libs/less/less-1.3.3.min.js"></script -->
	</head>
	<body>