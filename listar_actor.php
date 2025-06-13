<?php 
// Incluye el archivo de conexión en la cabecera 
include('./conexion/configurar.php'); 
 
// Consulta SQL para seleccionar todos los actores de la tabla actor 
$sql_select = "SELECT * FROM actor"; 
$result = $conn->query($sql_select); 
?> 
 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Lista de Actores</title> 
    <style> 
        table { 
            width: 100%; 
            border-collapse: collapse; 
        } 
        table, th, td { 
            border: 1px solid black; 
        } 
        th, td { 
            padding: 10px; 
            text-align: left; 
        } 
    </style> 
</head> 
<body> 
    <h2>Lista de Actores</h2> 
    <table> 
        <tr> 
            <th>ID</th> 
            <th>Nombre</th> 
        </tr> 
        <?php 
        // Muestra los datos de la tabla actor en una tabla HTML 
        while ($row = $result->fetch_assoc()) { 
            echo "<tr>"; 
            echo "<td>" . $row["actor_id"] . "</td>"; 
            echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>"; 
            echo "</tr>"; 
        } 
        ?> 
    </table> 
</body> 
</html> 