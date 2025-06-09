/**
 * Borra las cookies 'pedido' y 'cookies_accepted'.
 *
 * Este script se utiliza para eliminar las cookies relacionadas con el pedido y la aceptación de cookies,
 * estableciéndolas con un tiempo de expiración en el pasado.
 */
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        setcookie('pedido', '', time() - 3600, '/');
        setcookie('cookies_accepted', '', time() - 3600, '/');
}
?>
