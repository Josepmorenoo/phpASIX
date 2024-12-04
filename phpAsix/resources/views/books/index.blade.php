<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Llista de Llibres</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            font-size: 2rem;
            color: #2c3e50;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f39c12;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1c40f;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .actions {
            display: flex;
            justify-content: space-around;
        }

        .actions a {
            background-color: #2980b9;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            text-align: center;
            width: 80px;
        }

        .actions a:hover {
            background-color: #1f618d;
        }

        .add-book-button {
            display: block;
            background-color: #2ecc71;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            width: 200px;
            text-align: center;
            margin: 20px auto;
            text-decoration: none;
            font-size: 16px;
        }

        .add-book-button:hover {
            background-color: #27ae60;
        }

        .back-home {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .back-home a {
            color: #007bff;
            text-decoration: none;
        }

        .back-home a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Llista de Llibres</h1>

<div class="container">
    <a href="/books/create" class="add-book-button">Crear Llibre</a>

    <table>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Títol</th>
            <th scope="col">Autor</th>
            <th scope="col">Any</th>
            <th scope="col">Accions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book->id; ?></td>
            <td><?= htmlspecialchars($book->name); ?></td>
            <td><?= htmlspecialchars($book->author); ?></td>
            <td><?= $book->releaseYear; ?></td>
            <td class="actions">
                <a href="/books/show/<?= $book->id ?>" class="btn btn-details">Veure Detalls</a>
                <a href="/books/edit/<?= $book->id ?>">Editar</a>
                <a href="/books/confirm-delete/<?= $book->id ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="back-home">
        <a href="/">Tornar a la pàgina principal</a>
    </div>
</div>

</body>
</html>
