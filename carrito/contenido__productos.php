
    <!--                                                ENCABEZADO                               
    *Inclusion del encabezado-->
    <?php include(__DIR__ . "/./productos/encabezado.html"); ?>

    
    <?php
    $pedidoGuardado = [];
    // Verificar si las cookies están habilitadas y si el usuario ha aceptado las cookies 
    // Verificar si la cookie 'pedido' existe y decodificarla,
    if (isset($_COOKIE['cookies_accepted']) && $_COOKIE['cookies_accepted'] === 'true') {
        if (isset($_COOKIE['pedido'])) {
            $pedidoGuardado = json_decode($_COOKIE['pedido'], true);
        }
    }
    //se obtiene el contenido del pedido guardado en la cookie, sino se inicializa con 0
    $cantidad0 = isset($pedidoGuardado[0]['cantidad']) ? $pedidoGuardado[0]['cantidad'] : 0;
    $cantidad1 = isset($pedidoGuardado[1]['cantidad']) ? $pedidoGuardado[1]['cantidad'] : 0;
    $cantidad2 = isset($pedidoGuardado[2]['cantidad']) ? $pedidoGuardado[2]['cantidad'] : 0;
    $cantidad3 = isset($pedidoGuardado[3]['cantidad']) ? $pedidoGuardado[3]['cantidad'] : 0;
    $cantidad4 = isset($pedidoGuardado[4]['cantidad']) ? $pedidoGuardado[4]['cantidad'] : 0;
    $cantidad5 = isset($pedidoGuardado[5]['cantidad']) ? $pedidoGuardado[5]['cantidad'] : 0;
    $cantidad6 = isset($pedidoGuardado[6]['cantidad']) ? $pedidoGuardado[6]['cantidad'] : 0;
    $cantidad7 = isset($pedidoGuardado[7]['cantidad']) ? $pedidoGuardado[7]['cantidad'] : 0;

    ?>


    <!--                                                CATEGORIAS   -->

    <!-- /**
     * Este archivo genera una lista de productos colapsable categorizada en tres secciones: 
     * "Cuadernos", "Bolígrafos" y "Accesorios". Cada sección incluye una fila con funcionalidad 
     * de colapso para expandir o contraer su contenido.
     *
     * Secciones:
     * 1. Cuadernos:
     *    - Una sección colapsable para productos de "Cuadernos".
     *    - Incluye un archivo HTML externo: "productos/cuadernos.html".
     *
     * 2. Bolígrafos:
     *    - Una sección colapsable para productos de "Bolígrafos".
     *    - Incluye un archivo HTML externo: "productos/boligrafos.html".
     *
     * 3. Accesorios:
     *    - Una sección colapsable para productos de "Accesorios".
     *    - Incluye un archivo HTML externo: "productos/accesorios.html".
     *
     * Estructura:
     * - Cada categoría está representada por una fila con un botón de alternancia.
     * - Al hacer clic en el botón de alternancia, se expande o contrae el contenido asociado.
     * - El contenido de cada categoría se carga desde un archivo HTML externo.
     *
     * Dependencias:
     * - Se utilizan clases de Bootstrap para el diseño y la funcionalidad de colapso.
     * - Se emplean Glyphicons para los íconos de alternancia.
     *
     * Notas:
     * - Asegúrese de que los archivos HTML incluidos existan en el directorio "productos".
     * - Verifique que Bootstrap y Glyphicons estén correctamente cargados en el proyecto.
     */ -->

    <!------------------------------------------------------- CUADERNOS   ------------------------------------------->
    <!-- Botón de alternancia-->
    <div class="row toggle-row" data-toggle="collapse" data-target="#CuadernosCollapse">
        <div class="col-4 font-weight-bold">Cuadernos</div>
        <div class="col-3"></div>
        <div class="col-3 text-right">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </div>
    </div>
    <!-- Contenido Colapsable -->
    <div class="collapse" id="CuadernosCollapse">
        <div class="card card-body">
            <?php include(__DIR__ . "/./productos/cuadernos.html"); ?>
        </div>
    </div>



    <!--------------------------------------------------------  BOLIGRAFOS   -------------------------------------------->
    <!-- Botón de alternancia -->
    <div class="row toggle-row" data-toggle="collapse" data-target="#BoligrafosCollapse">
        <div class="col-4 font-weight-bold">Bolígrafos</div>
        <div class="col-3"></div>
        <div class="col-3 text-right">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </div>
    </div>
    <!-- Contenido Colapsable -->
    <div class="collapse" id="BoligrafosCollapse">
        <div class="card card-body">
            <?php include(__DIR__ . "/./productos/boligrafos.html"); ?>
        </div>
    </div>



    <!--------------------------------------------------------  ACCESORIOS   -------------------------------------------->
    <!-- Botón de alternancia -->
    <div class="row toggle-row" data-toggle="collapse" data-target="#AccesoriosCollapse">
        <div class="col-4 font-weight-bold">Accesorios</div>
        <div class="col-3"></div>
        <div class="col-3 text-right">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </div>
    </div>
    <!-- Contenido Colapsable -->
    <div class="collapse" id="AccesoriosCollapse">
        <div class="card card-body">
            <?php include(__DIR__ . "/./productos/accesorios.html"); ?>
        </div>
    </div>

<!-- Script que permite que al tocar los spinners se muestre en automatico el subtotal de los productos -->
<script src="./touch_spinner.js"></script>

<script>
  // Mismo script de búsqueda pero para ser reutilizable
  (() => {
    const inputBusqueda = document.getElementById('inputBusqueda');
    const btnBuscar = document.getElementById('btnBuscar');
    const categoriaDropdownMenu = document.getElementById('categoriaDropdownMenu');
    const categoriaDropdownBtn = document.getElementById('categoriaDropdownBtn');

    let categoriaSeleccionada = 'all';

    function filtrarProductos() {
      const filtro = inputBusqueda.value.toLowerCase().trim();

      const categorias = ['Cuadernos', 'Boligrafos', 'Accesorios'];

      categorias.forEach(categoria => {
        if (categoriaSeleccionada !== 'all' && categoria !== categoriaSeleccionada) {
          document.querySelectorAll(`[data-categoria="${categoria}"]`).forEach(el => el.style.display = 'none');
          return;
        } else {
          document.querySelectorAll(`[data-categoria="${categoria}"]`).forEach(el => el.style.display = '');
        }

        const contenedor = document.querySelector(`#${categoria}Collapse .card-body`);
        if (!contenedor) return;

        const productos = contenedor.querySelectorAll('*');

        let algunProductoVisible = false;
        productos.forEach(prod => {
          if (prod.textContent.toLowerCase().includes(filtro)) {
            prod.style.display = '';
            algunProductoVisible = true;
          } else {
            prod.style.display = 'none';
          }
        });

        const toggleRow = document.querySelector(`.toggle-row[data-categoria="${categoria}"]`);
        const collapseDiv = document.querySelector(`#${categoria}Collapse`);

        if (algunProductoVisible || filtro === '') {
          if (toggleRow) toggleRow.style.display = '';
          if (collapseDiv) collapseDiv.style.display = '';
        } else {
          if (toggleRow) toggleRow.style.display = 'none';
          if (collapseDiv) collapseDiv.style.display = 'none';
        }
      });
    }

    btnBuscar.addEventListener('click', filtrarProductos);
    inputBusqueda.addEventListener('input', filtrarProductos);

    categoriaDropdownMenu.querySelectorAll('a.dropdown-item').forEach(item => {
      item.addEventListener('click', e => {
        e.preventDefault();
        categoriaSeleccionada = item.dataset.categoria;
        categoriaDropdownBtn.textContent = item.textContent;
        filtrarProductos();
      });
    });
  })();
</script>
