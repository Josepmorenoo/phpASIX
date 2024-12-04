<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestió de Jugadors - Demo ASIX</title>
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

        /* Taula de jugadors */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        tr:hover td {
            background-color: #e2e2e2;
        }

        /* Estils per als botons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        .btn-create {
            background-color: #28a745;
        }

        .btn-edit {
            background-color: #007bff;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        /* Estils per al botó "Tornar al Home" */
        .btn-home {
            background-color: #007bff;
            margin: 20px auto;
            display: block;
            width: 150px;
            text-align: center;
        }

        /* Enllaços de la taula */
        a {
            color: white;
            text-decoration: none;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #333;
            padding: 20px 0;
            background-color: #333;
            color: white;
        }

    </style>
</head>
<body>

<!-- Títol de la pàgina -->
<h1>Gestió de Jugadors</h1>

<!-- Botó per tornar al Home -->
<a href="/" class="btn btn-home">Tornar al Home</a>

<!-- Botó per crear un nou jugador -->
<a href="/jugadors/create" class="btn btn-create">Crear Jugador</a>

<!-- Taula amb la llista de jugadors -->
<table>
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Equip</th>
        <th scope="col">Posició</th>
        <th scope="col">Accions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($jugadors as $jugador): ?>
    <tr>
        <td><?= $jugador->id; ?></td>
        <td><?= $jugador->nom; ?></td> <!-- Canviat a 'name' -->
        <td><?= $jugador->equip; ?></td> <!-- Canviat a 'team' -->
        <td><?= $jugador->posicio; ?></td> <!-- Canviat a 'position' -->
        <td>
            <a href="/jugadors/edit/<?= $jugador->id ?>" class="btn btn-edit">Editar</a>
            <a href="/jugadors/show/<?= $jugador->id ?>" class="btn">Veure detalls</a>
            <a href="/jugadors/confirm-delete/<?= $jugador->id ?>" class="btn btn-delete">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Demo ASIX | Tots els drets reservats</p>
</footer>

</body>
</html>
