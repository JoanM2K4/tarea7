<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Actor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background-color: #f5f5f5;
        }

        h1 {
            color: #333;
        }

        form {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 1.5rem;
            width: 100%;
            padding: 0.7rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    

    <form method="post" action="insertar_actor2.php">
        <h1>Insertar actor</h1>
        <label for="actor_id">Actor ID</label>
        <input type="text" id="actor_id" name="actor_id" required>

        <label for="first_name">Nombre</label>
        <input type="text" id="nfirst_name" name="first_name" required>

        <label for="last_name">Apellido</label>
        <input type="text" id="last_name" name="last_name" required>

        <button type="submit">Insertar actor</button>
    </form>

</body>
</html>
