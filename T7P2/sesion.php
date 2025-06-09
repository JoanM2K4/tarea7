<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: T7P2.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title class="text-center">Sesión Iniciada</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <link rel="stylesheet" href="../CSS/T7P2.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Esta es una página protegida por sesión.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>