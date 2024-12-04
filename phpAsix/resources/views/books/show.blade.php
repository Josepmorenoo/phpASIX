<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalls del Llibre</title>
    <style>
        /* Estils generals */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        p {
            font-size: 1.2rem;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Detalls del Llibre</h1>
    <p><strong>ID:</strong> <?= $book->id ?></p>
    <p><strong>Nom:</strong> <?= $book->name ?></p>
    <p><strong>Autor:</strong> <?= $book->author ?></p>
    <p><strong>Any de publicació:</strong> <?= $book->releaseYear ?></p>


    <a href="/books" class="btn-back">Tornar a la llista</a>
</div>
</body>
</html>

