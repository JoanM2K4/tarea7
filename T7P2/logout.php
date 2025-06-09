<?php
// Inicia la sesión o continúa con la sesión existente
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye por completo la sesión actual
session_destroy();

// Redirige al usuario al archivo index.php ubicado en el directorio padre
header("Location: ../index.php");

// Termina el script para asegurar que no se ejecute más código
exit();
?>