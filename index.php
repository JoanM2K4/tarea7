<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab de BD VS Tejegod</title>
    <!-- Incluye Bootstrap CSS (usa CDN para mayor facilidad) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #2c2c2c;
            /* Estilo Material You fondo oscuro */
            color: #e0e0e0;
            /* Texto claro que contrasta bien */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
    </style>
</head>

<body>
    <!--------------------------Header----------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestión de Actores</a>
        </div>
    </nav>




    <!--------------------------Contenido----------------------------------------->
    <div class="container mt-4" style="flex-grow: 1;">
        <h3 class="mb-4">Gestión de Actores</h3>

        <!-- Botones o Tabs -->
        <div class="btn-group mb-3" role="group" aria-label="Opciones de formulario">
            <button type="button" class="btn btn-outline-primary" onclick="cargarFormulario('formulario.php')">Añadir
                Actor</button>
            <button type="button" class="btn btn-outline-primary"
                onclick="cargarFormulario('modificar_actor.php')">Modificar Actor</button>
            <button type="button" class="btn btn-outline-primary" onclick="cargarFormulario('listar_actor.php')">Listar
                Actores</button>
        </div>

        <!-- Contenedor donde se cargan los formularios -->
        <div id="contenedor-formulario" class="border rounded p-4 shadow-sm"
            style="min-height: 300px; background-color: #f8f9fa;">
            <p class="text-muted">Selecciona una opción para mostrar el formulario correspondiente.</p>
        </div>
    </div>


    <!--------------------------Footer----------------------------------------->
    <footer class="bg-primary text-white text-center py-3 mt-4">
        &copy; 2025 Gestión de Actores. Joan Soto, Angelo Guerrero., Onel Magallon, Erick Tenorio, 
    </footer>

    <script src="./JS/cargar.js"></script>
</body>

</html>