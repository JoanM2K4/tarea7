<!DOCTYPE html>
<html>
<head>
	<title>Utiles Escolares</title>

	<!-- Enlaces a hojas de estilo locales para el header, footer y contenido principal -->
	<link rel="stylesheet" type="text/css" href="CSS/index/header.css">
	<link rel="stylesheet" type="text/css" href="CSS/index/footer.css">
	<link rel="stylesheet" type="text/css" href="CSS/index/index.css">

	<!-- Iconos de Font Awesome para mejorar la estética -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Inclusión de Bootstrap 5 para estilos y componentes responsivos -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="height: 100vh;"> <!-- Cuerpo principal de la página, con altura completa de la ventana -->

	<?php
	// Se incluye un archivo PHP llamado 'procesar.php', posiblemente para inicializar procesos o manejar datos
	include 'procesar.php';
	?> 

	<?php
	// Se inicia o continúa una sesión
	session_start();

	// Si el usuario ha iniciado sesión, se carga un header personalizado para usuarios logueados
	if (isset($_SESSION['usuario'])) {
		include("carrito/comunes/header_sesion.html");
	} else {
		// Si no hay sesión activa, se carga el header general
		include("carrito/comunes/header.html");
	}
	?>

	<!-- Se incluye un componente visual tipo jumbotron (banner principal) -->
	<?php include("carrito/comunes/jumbotron.html") ?>

	<!-- Contenedor principal donde se carga el contenido de otra página PHP mediante iframe -->
	<div class="contenido">
		<iframe src="./carrito/contenido.php" style="width:100%; height:900px; border:none;"></iframe>
	</div>
	
	<!-- Inclusión del pie de página -->
	<?php include("carrito/comunes/footer.html") ?>

	<!-- Script que registra la posición del scroll y la envía al backend mediante POST -->
	<script>
	document.addEventListener("scroll", function () {
		// Obtiene la posición actual del scroll vertical
		let scrollPosition = window.scrollY || window.pageYOffset;

		// Envía la posición al archivo PHP para ser registrada (por ejemplo, para análisis de uso o navegación)
		fetch("T7P2/registrar_scroll.php", {
			method: "POST",
			headers: {
				"Content-Type": "application/x-www-form-urlencoded"
			},
			body: "posicion=" + scrollPosition
		});
	});
	</script>

</body>
</html>