<?php 
// Incluye el archivo de conexión en la cabecera 
include('../conexion/configurar.php'); 
 
 
// Define las variables para almacenar los datos del actor 
$actorId = ""; 
$nombre = ""; 
$apellido = ""; 
 
// Verifica si se ha enviado el formulario 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Obtiene el ID del actor desde el formulario 
    $actorId = $_POST["actor_id"]; 
 
    // Consulta la base de datos para obtener los datos del actor 
    $sql = "SELECT first_name, last_name FROM actor WHERE actor_id = $actorId"; 
    $result = $conn->query($sql); 
 
    // Verifica si se encontraron resultados 
    if ($result->num_rows > 0) { 
        // Obtiene los datos del actor 
        $row = $result->fetch_assoc(); 
        $nombre = $row["first_name"]; 
        $apellido = $row["last_name"]; 
    } else { 
        // Si no se encontraron resultados, muestra un mensaje de error 
        echo "No se encontró ningún actor con el ID proporcionado."; 
    } 
} 
 
// Cierra la conexión a la base de datos 
$conn->close(); 
?> 
 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Modificar Actor</title> 
</head> 
<body> 
    <h2>Modificar Actor</h2> 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <label for="actor_id">ID del Actor:</label> 
        <input type="number" id="actor_id" name="actor_id" value="<?php echo $actorId; ?>" 
required> 
        <button type="submit">Buscar</button> 
    </form> 
 
    <?php 
    // Muestra los datos del actor si están disponibles 
    if ($nombre !== "" && $apellido !== "") { 
        echo "<h3>Datos del Actor:</h3>"; 
        // Muestra los datos en campos de texto para que el usuario pueda modificarlos 
        echo '<form method="post" action="modificar_actor.php">'; 
        echo '<input type="hidden" name="actor_id" value="' . $actorId . '">'; 
        echo '<label for="nombre">Nombre:</label>'; 
        echo '<input type="text" id="nombre" name="nombre" value="' . $nombre . '" required><br>'; 
        echo '<label for="apellido">Apellido:</label>'; 
        echo '<input type="text" id="apellido" name="apellido" value="' . $apellido . '" required><br>'; 
        echo '<input type="submit" value="Guardar Cambios">'; 
        echo '</form>'; 
    } 
    ?> 
</body>
</html>