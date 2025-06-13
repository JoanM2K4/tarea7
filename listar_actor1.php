<?php 
// Incluye el archivo de conexión en la cabecera 
include('./conexion/configurar.php'); 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Recupera los datos del formulario 
    $actor_id = $_POST["actor_id"]; 
    $first_name = $_POST["first_name"]; 
    $last_name = $_POST["last_name"]; 
 
    // Verifica si el actor_id ya existe en la tabla actor 
    $sql_check = "SELECT * FROM actor WHERE actor_id = $actor_id"; 
    $result_check = $conn->query($sql_check); 
 
    if ($result_check->num_rows > 0) { 
        // El actor_id ya existe, muestra un mensaje y redirige al formulario 
        echo "El actor con ID $actor_id ya existe en la tabla."; 
        header("Location: formulario.php"); 
        exit(); 
    } 
 
    try { 
        // Consulta SQL para insertar un nuevo actor en la tabla actor 
        $sql_insert = "INSERT INTO actor (actor_id, first_name, last_name) VALUES ($actor_id, 
'$first_name', '$last_name')"; 
 
        // Ejecuta la consulta 
        if ($conn->query($sql_insert) === TRUE) { 
            // Redirige a la página que lista todo el contenido de la tabla actor 
            header("Location: listar_actores.php"); 
            exit(); 
        } else { 
            // Lanza una excepción si hay un error en la consulta SQL 
            throw new Exception("Error al insertar el actor: " . $conn->error); 
        } 
    } catch (Exception $e) { 
        // Captura cualquier excepción y muestra un mensaje de error 
        echo "Ha sucedido un error: " . $e->getMessage(); 
    } 
 
    // Cierra la conexión 
    $conn->close(); 
} 
?>