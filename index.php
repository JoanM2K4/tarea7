<!DOCTYPE html>
<html>

<head>
	<title>Utiles Escolares</title>
	<link rel="stylesheet" type="text/css" href="CSS/index/header.css">
	<link rel="stylesheet" type="text/css" href="CSS/index/footer.css">
	<link rel="stylesheet" type="text/css" href="CSS/index/index.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="height: 100vh;">
	<?php
	include 'procesar.php';
	?>
	<?php include("carrito/comunes/header.html") ?><!--Incrustar header-->

	<?php include("carrito/comunes/jumbotron.html") ?><!--Incrustar header-->

	<div class="contenido">
		<iframe src="./carrito/contenido.php" style="width:100%; height:900px; border:none;"></iframe>
	</div>
	
	<?php include("carrito/comunes/footer.html") ?> <!--Incrustar foooter-->

</body>

</html>