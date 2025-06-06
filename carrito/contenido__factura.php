<!-- /**
 * Esta sección del código representa un cuadro de resumen para la factura del formulario de pedido.
 * 
 * - El cuadro de resumen incluye un título "Orden de Pedido".
 * - Incluye dinámicamente  el archivo `archivo_procesar.php` que devolvera los datos de la factura`.
 * - Se proporciona un botón para enviar el pedido.
 * 
 */ -->
<!-- Resumen -->
<div class="summary-box">
  <h5 class="summary-title">Orden de Pedido</h5>

  <div id="resultado">
  </div>

  <button type="button" class="btn btn-success checkout-btn" onclick="Facturar()">Realizar Pedido</button>
</div>

 <script>
    // Se ejecuta cuando se presiona el botón "Guardar", envía toda la data del formulario
    function Facturar() {
      // Selecciona el formulario por su ID
      const formulario = document.getElementById('formPedido'); 
      // Valida el formulario y lo envía

      if (!formulario.checkValidity()) {
        formulario.reportValidity();
        return;
      }

      // arma un objeto FormData con los datos del formulario
      const formData = new FormData(formulario);

      fetch('./accion_facturar.php', {
        method: 'POST',
        body: formData // Enviamos el objeto FormData al servidor
      })
        .then(res => res.text())
        .then(html => {
          document.getElementById('resultado').innerHTML = html;
        })
        .catch(error => {
          console.error('Error al enviar:', error);
        });

    }
  </script>