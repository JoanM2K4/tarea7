<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab de BD VS Tejegod</title>
    <!-- Incluye Bootstrap CSS (usa CDN para mayor facilidad) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>

<body>
    <!--------------------------Contenido----------------------------------------->
    <div class="container mt-4" style="flex-grow: 1;">
        <h3 class="mb-4">Gestión de Actores <span class="badge text-white" style="background-color: #1299B7;">SAKILA</span>
</h3>

        <!-- Botones o Tabs -->
        <div class="btn-group mb-3" role="group" aria-label="Opciones de formulario">
            <button type="button" class="btn btn-outline-light" onclick="cargarFormulario('formulario.php')">Añadir
                Actor</button>
            <button type="button" class="btn btn-outline-light"
                onclick="cargarFormulario('formulario_modificar_actor.php')">Modificar Actor</button>
            <button type="button" class="btn btn-outline-light" onclick="cargarFormulario('listar_actor.php')">Listar
                Actores</button>
        </div>

        <!-- Contenedor donde se cargan los formularios -->
        <div id="contenedor-formulario" class="p-4" style="min-height: 300px;">
            <span class="badge bg-light text-dark">
             Selecciona un formulario
            </span>
        </div>
    </div>


    <!--------------------------Footer----------------------------------------->
   <?php include './footer.php' ?>
    <!--------------------------Scripts----------------------------------------->

    <script src="./JS/cargar.js"></script>
</body>

</html>