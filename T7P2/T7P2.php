<?php
// Inicia la sesión o continúa una ya existente
session_start();

// Verifica si ya hay una sesión activa para el usuario
// Si existe, redirige a 'sesion.php' para evitar volver a mostrar el formulario de login
if (isset($_SESSION['usuario'])) {
    header("Location: sesion.php");
    exit(); // Finaliza el script para evitar que se cargue el HTML
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Enlaces a hojas de estilo personalizadas -->
    <link rel="stylesheet" href="../CSS/estilo.css">
    <link rel="stylesheet" href="../CSS/T7P2.css">
</head>
<body>
    <!-- Encabezado centrado -->
    <div style="text-align: center;">
        <h2>Iniciar Sesión</h2>
    </div>

    <!-- Formulario de inicio de sesión -->
    <form method="POST" action="verificar.php">
        <!-- Campo para el nombre de usuario -->
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br>

        <!-- Campo para la contraseña -->
        <label>Contraseña:</label><br>
        <input type="password" name="clave" required><br><br>

        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Entrar">
    </form>
</body>
</html>