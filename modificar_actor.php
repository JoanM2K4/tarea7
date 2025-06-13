<?php 
// Incluye el archivo de conexión en la cabecera 
include('./conexion/configurar.php');  
 
// Verifica si se han enviado los datos del formulario 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
// Obtiene los datos del formulario 
$actorId = $_POST["actor_id"]; 
$nuevoNombre = $_POST["nombre"]; 
$nuevoApellido = $_POST["apellido"]; 
// Actualiza los datos del actor en la base de datos 
$sql = "UPDATE actor SET first_name='$nuevoNombre', last_name='$nuevoApellido' WHERE 
actor_id=$actorId"; 
// Verifica si la consulta de actualización fue exitosa 
if ($conn->query($sql) === TRUE) { 
echo "Los datos del actor han sido modificados correctamente."; 
} else { 
echo "Error al actualizar los datos del actor: " . $conn->error; 
} 
} 
// Cierra la conexión a la base de datos 
$conn->close(); 
?>