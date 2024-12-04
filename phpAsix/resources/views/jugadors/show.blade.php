<!-- resources/views/jugadors/show.blade.php -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalls del Jugador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .player-details {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .player-details p {
            font-size: 18px;
            line-height: 1.6;
        }

        .player-details strong {
            color: #555;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            font-size: 18px;
            color: #3498db;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Detalls del Jugador</h1>

    <!-- Detalls del jugador -->
    <div class="player-details">
        <p><strong>ID:</strong> <?= $jugador->id ?></p>
        <p><strong>Nom:</strong> <?= $jugador->nom ?></p>
        <p><strong>Equip:</strong> <?= $jugador->equip ?></p>
        <p><strong>Posició:</strong> <?= $jugador->posicio ?></p>
    </div>




    <!-- Enllaç per tornar a la llista de jugadors -->
    <div class="back-link">
        <a href="/jugadors">Tornar a la llista de jugadors</a>
    </div>
</div>
</body>
</html>
<?php
