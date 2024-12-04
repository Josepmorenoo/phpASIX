<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Llibre: <?= htmlspecialchars($book->name) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            font-size: 24px;
        }

        form {
            background-color: white;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .back-link a {
            color: #007bff;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Editar llibre: <?= htmlspecialchars($book->name) ?></h1>

<div>
    <form action="/books/update/<?= $book->id ?>" method="POST">
        <div>
            <label for="name">Títol</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($book->name) ?>" required>
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" value="<?= htmlspecialchars($book->author) ?>" required>
        </div>
        <div>
            <label for="releaseYear">Any de publicació</label>
            <input type="number" name="releaseYear" id="releaseYear" value="<?= htmlspecialchars($book->releaseYear) ?>" required>
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
</div>

<div class="back-link">
    <a href="/books">Tornar a la llista de llibres</a>
</div>

</body>
</html>
