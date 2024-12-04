<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Jugador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            width: 400px;
        }

        h1 {
            color: #d9534f;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        button {
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c9302c;
        }

        .cancel-link {
            text-decoration: none;
            background-color: #5bc0de;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .cancel-link:hover {
            background-color: #31b0d5;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Confirmar Eliminació</h1>
    <p>Estàs segur que vols eliminar el jugador <strong><?= htmlspecialchars($jugador->name) ?></strong>?</p>
    <div class="button-container">
        <form action="/jugadors/destroy/<?= $jugador->id ?>" method="POST">
            <button type="submit">Eliminar</button>
        </form>
        <a href="/jugadors" class="cancel-link">Cancel·lar i tornar a la llista</a>
    </div>
</div>
</body>
</html>
