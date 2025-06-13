<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab de BD VS Tejegod</title>
    <!-- Incluye Bootstrap CSS (usa CDN para mayor facilidad) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h3 class="mb-4">Gestión de Actores</h3>

        <!-- Botones o Tabs -->
        <div class="btn-group mb-3" role="group" aria-label="Opciones de formulario">
            <button type="button" class="btn btn-outline-primary" onclick="cargarFormulario('formulario.php')">Añadir
                Actor</button>
            <button type="button" class="btn btn-outline-primary"
                onclick="cargarFormulario('formulario_modificar_actor.php')">Modificar Actor</button>
            <button type="button" class="btn btn-outline-primary" onclick="cargarFormulario('listar_actor.php')">Listar
                Actores</button>
        </div>

        <!-- Contenedor donde se cargan los formularios -->
        <div id="contenedor-formulario" class="border rounded p-4 shadow-sm"
            style="min-height: 300px; background-color: #f8f9fa;">
            <p class="text-muted">Selecciona una opción para mostrar el formulario correspondiente.</p>
        </div>
    </div>
    <script src="./JS/cargar.js"></script>
</body>

</html>