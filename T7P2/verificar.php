<?php
// Inicia la sesión o reanuda una sesión existente
session_start();

// Credenciales válidas (pueden venir de una base de datos en un sistema más robusto)
$usuario = "admin";
$clave = "1234";

// Verifica si los datos enviados por el formulario coinciden con las credenciales válidas
if ($_POST['usuario'] === $usuario && $_POST['clave'] === $clave) {
    // Si las credenciales son correctas, se guarda el nombre de usuario en la sesión
    $_SESSION['usuario'] = $usuario;

    // Redirige al usuario a la página principal (index.php)
    header("Location: ../index.php");
} else {
    // Si las credenciales no coinciden, muestra un mensaje de error y redirige nuevamente al formulario de inicio de sesión
    echo "<script>
        alert('Usuario o contraseña incorrectos');
        window.location='T7P2.php';
    </script>";
}