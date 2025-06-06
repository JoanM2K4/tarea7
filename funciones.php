<?php
// archivo: funciones.php
function crearModal(){
echo '
<div class="modal fade" id="MyModalCookie" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-cookie">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Aviso de Cookies</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web.</p>
            </div>
            <div class="modal-footer">
                <form method="post" action="index.php">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Rechazar</button>
                    <button type="submit" class="btn btn-primary" name="accept_cookies" id="accept_cookies">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
' ;
}

// Modal para pedir aceptar las cookies para que el carrito pueda guardar los datos
function pedirdCookies() {
    // Comprueba si el usuario ya ha aceptado las cookies
    if (!isset($_COOKIE['cookies_accepted'])) {
        // El usuario no ha aceptado las cookies, mostrar el modal
        echo '
        <script>
        // Muestra el modal automáticamente cuando la página se carga
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById("MyModalCookie"));
            myModal.show();
        });
        </script>
        ';
    }
}
