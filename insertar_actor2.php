<?php 
include 'conectar.php'; 
 
// Obtener datos del formulario 
$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido']; 
 
// Llamar al procedimiento almacenado para insertar el actor 
$sql = "CALL InsertarActor('$nombre', '$apellido')"; 
 
if ($conn->query($sql) === TRUE) { 
    // Redirigir a la página que muestra todos los actores ordenados por fecha 
    header("Location: mostrar_actores.php"); 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
} 
 
// Cerrar la conexión 
$conn->close(); 
?> 