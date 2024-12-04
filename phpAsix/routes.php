<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    // Rutes per a llibres
    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',

    '/jugadors' => '../App/Controllers/JugadorsController.php@index',
    '/jugadors/create' => '../App/Controllers/JugadorsController.php@create',
    '/jugadors/store' => '../App/Controllers/JugadorsController.php@store',
    '/jugadors/edit/{id}' => '../App/Controllers/JugadorsController.php@edit',
    '/jugadors/update/{id}' => '../App/Controllers/JugadorsController.php@update',
    '/jugadors/delete/{id}' => '../App/Controllers/JugadorsController.php@delete',
    '/jugadors/destroy/{id}' => '../App/Controllers/JugadorsController.php@destroy',
    '/jugadors/confirm-delete/{id}' => '../App/Controllers/JugadorsController.php@confirmDelete',
];
