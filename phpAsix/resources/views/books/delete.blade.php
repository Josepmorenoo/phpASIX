<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Llibre: <?= htmlspecialchars($book->name) ?></title>
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

        .confirmation-container {
            background-color: white;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .confirmation-container p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .confirmation-container strong {
            color: #ff4d4d;
        }

        button {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background-color: #c0392b;
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

<h1>Eliminar llibre</h1>

<div class="confirmation-container">
    <p>Estàs segur que vols eliminar el llibre <strong><?= htmlspecialchars($book->name) ?></strong>?</p>

    <form action="/books/destroy/<?= $book->id ?>" method="POST">
        <button type="submit">Eliminar</button>
    </form>

    <div class="back-link">
        <a href="/books">Cancel·lar</a>
    </div>
</div>

</body>
</html>
