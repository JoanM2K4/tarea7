<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Insertar Actor</title> 
</head> 
<body> 
    <h2>Insertar Nuevo Actor</h2> 
    <form method="post" action="insertar_actor1.php"> 
        <label for="actor_id">Actor ID:</label> 
        <input type="number" id="actor_id" name="actor_id" required><br><br> 
        <label for="first_name">Nombre:</label> 
        <input type="text" id="first_name" name="first_name" required><br><br> 
        <label for="last_name">Apellido:</label> 
        <input type="text" id="last_name" name="last_name" required><br><br> 
        <input type="submit" value="Insertar Actor"> 
    </form> 
</body> 