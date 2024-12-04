<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Jugador</title>
    <style>
        /* Estils generals */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 50px;
        }

        /* Formulari */
        form {
            background-color: white;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Enllaç per tornar a la llista */
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            font-size: 16px;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Editar Jugador</h1>

<!-- Formulari per editar un jugador -->
<form action="/jugadors/update/<?= $jugador->id ?>" method="POST">
    <div>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($jugador->name) ?>" required>
    </div>
    <div>
        <label for="team">Equip:</label>
        <input type="text" id="team" name="team" value="<?= htmlspecialchars($jugador->team) ?>" required>
    </div>
    <div>
        <label for="position">Posició:</label>
        <input type="text" id="position" name="position" value="<?= htmlspecialchars($jugador->position) ?>" required>
    </div>
    <button type="submit">Guardar</button>
</form>

<!-- Botó per tornar a la llista de jugadors -->
<a href="/jugadors">Tornar a la llista de jugadors</a>

</body>
</html>
