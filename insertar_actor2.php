<?php 
include('./conexion/configurar.php'); 

// Verificar si se enviaron los datos por POST
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['first_name'], $_POST['last_name'])) {

    // Obtener datos del formulario de forma segura
    $nombre = $conn->real_escape_string($_POST['first_name']); 
    $apellido = $conn->real_escape_string($_POST['last_name']); 
 
    // Llamar al procedimiento almacenado para insertar el actor
    $sql = "CALL InsertarActor('$nombre', '$apellido')"; 
 
    if ($conn->multi_query($sql)) {
        do {
            if ($result = $conn->store_result()) {
                // Opcional: obtener mensaje del procedimiento
                $row = $result->fetch_assoc();
                echo $row['mensaje']; // Si quieres mostrar el mensaje
                $result->free();
            }
        } while ($conn->more_results() && $conn->next_result());

        $conn->close(); // cerrar conexión antes de redirigir
        header("Location: listar_actor.php"); 
        exit; // detener el script después del header
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
        $conn->close(); 
    } 
 
} else {
    echo "Error: No se enviaron datos válidos mediante POST.";
}
?>
