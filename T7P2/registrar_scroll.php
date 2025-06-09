<?php
// Inicia o continúa la sesión para poder acceder a variables de sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión iniciada, termina el script sin hacer nada
    exit(); // No registra la posición de scroll si el usuario no está logueado
}

// Recupera el nombre de usuario almacenado en la sesión
$usuario = $_SESSION['usuario'];

// Obtiene la posición del scroll enviada por POST (si no existe, usa 0 por defecto)
$posicion = $_POST['posicion'] ?? 0;

// Obtiene la fecha y hora actual en formato Año-Mes-Día Hora:Minuto:Segundo
$hora = date("Y-m-d H:i:s");

// Construye una línea de registro con la hora, el usuario y la posición del scroll
$linea = "[$hora] $usuario scroll: $posicion px\n";

// Guarda la línea en el archivo 'scroll.log', agregando al final sin sobrescribir el contenido
file_put_contents("scroll.log", $linea, FILE_APPEND);