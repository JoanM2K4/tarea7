<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar si el usuario aceptó cookies
    if (!isset($_COOKIE['cookies_accepted']) || $_COOKIE['cookies_accepted'] !== 'true') {
         error_log("No se pudo crear la cookie ");
        exit;
    }

    // Obtener los productos del POST
    $productos = $_POST['productos'] ?? [];

    // Guardar en cookie como JSON (expira en 30 días)
    setcookie('pedido', json_encode($productos), time() + (86400 * 30), '/');
     error_log("Intentando setear cookie pedido: " . json_encode($productos));
}
