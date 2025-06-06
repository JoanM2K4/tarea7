<?php
// archivo: procesar.php
include 'Funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accept_cookies'])) {
    setcookie('cookies_accepted', 'true', time() + (60 * 60 * 24 * 30), '/');
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

crearModal();
pedirdCookies();
?>
