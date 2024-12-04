<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina Principal</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f9;
            color: #333;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            letter-spacing: 1px;
        }

        main {
            padding: 3rem 2rem;
            text-align: center;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 3rem; /* Ampliat espai entre els botons */
            margin-bottom: 2rem; /* Marge inferior per a separació amb la resta de contingut */
        }

        nav a {
            padding: 0.8rem 1.5rem;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.3s;
        }

        nav a:hover {
            background-color: #2980b9;
            transform: translateY(-5px);
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #ecf0f1;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Button to go back to Home */
        .home-button {
            margin-top: 30px;
            padding: 8px 16px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block; /* Permet que estigui centrat */
        }

        .home-button:hover {
            background-color: #1e8449;
        }
    </style>
</head>
<body>

<header>
    <h1>Projecte PHPAsix</h1>
</header>

<main>
    <p>Selecciona el temari que vulgues gestionar</p>

    <nav>
        <a href="/jugadors">Gestió de Jugadors</a>
        <a href="/books">Gestió de Llibres</a>
    </nav>


</main>

<footer>
    Creat per <a href="#">Josep Moreno</a>. © 2024
</footer>

</body>
</html>
