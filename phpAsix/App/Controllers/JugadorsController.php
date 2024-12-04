<?php
namespace App\Controllers;

use App\Models\Jugador;
use Core\View;

class JugadorsController {

    public function index() {
        // Obtenir tots els jugadors
        $jugadors = Jugador::all();

        // Carregar la vista i passar la variable $jugadors
        require_once __DIR__ . '/../../resources/views/jugadors/index.blade.php';
    }


    public function create() {
        require '../resources/views/jugadors/create.blade.php';
    }

    public function store() {
        $nom = $_POST['name'];
        $equip = $_POST['team'];
        $posicio = $_POST['position'];

        $newJugador = new Jugador([
            'name' => $nom ,
            'team' => $equip,
            'position' => $posicio
        ]);
        $newJugador->save();
        header('Location: /jugadors');
    }

    public function edit($id) {
        $jugador = (new \App\Models\Jugador)->find($id);
        if (!$jugador) {
            header('Location: /jugadors');
            exit();
        }
        require '../resources/views/jugadors/edit.blade.php';
    }

    public function update($id) {
        $jugador = (new \App\Models\Jugador)->find($id);
        if (!$jugador) {
            header('Location: /jugadors');
            exit();
        }
        $jugador->name = $_POST['name'];
        $jugador->team = $_POST['team'];
        $jugador->position = $_POST['position'];
        $jugador->save();
        header('Location: /jugadors');
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /jugadors');
            exit();
        }
        $jugador = (new \App\Models\Jugador)->find($id);
        return require '../../resources/views/jugadors/delete.blade.php';
    }

    public function destroy($id) {
        (new \App\Models\Jugador)->delete($id);
        header('Location: /jugadors');
    }

    public function confirmDelete($id) {
        $jugador = (new \App\Models\Jugador)->find($id);
        return require '../resources/views/jugadors/delete.blade.php';
    }
    public function show($id) {
        // Utilitzar una instància del model Jugador per obtenir les dades del jugador
        $jugador = (new \App\Models\Jugador)->find($id);

        // Comprovar si el jugador existeix
        if (!$jugador) {
            header("Location: /jugadors");
            exit();
        }

        // Carregar la vista i passar la variable $jugador
        require_once __DIR__ . '/../../resources/views/jugadors/show.blade.php';
    }


}
