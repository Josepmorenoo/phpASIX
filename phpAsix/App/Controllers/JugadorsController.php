<?php
namespace App\Controllers;

use App\Models\Jugador;
use Core\View;

class JugadorsController {

    public function index() {
        $jugadors = Jugador::all(); // Obté tots els jugadors
        require '../resources/views/jugadors/index.blade.php'; // Mostra la vista de la llista de jugadors
    }

    public function create() {
        require '../resources/views/jugadors/create.blade.php';
    }

    public function store() {
        $name = $_POST['name'];
        $team = $_POST['team'];
        $position = $_POST['position'];

        $newJugador = new Jugador([
            'name' => $name,
            'team' => $team,
            'position' => $position
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
        return require '../resources/views/jugadors/delete.blade.php';
    }

    public function destroy($id) {
        (new \App\Models\Jugador)->delete($id);
        header('Location: /jugadors');
    }

    public function confirmDelete($id) {
        $jugador = (new \App\Models\Jugador)->find($id);
        return require '../resources/views/jugadors/delete.blade.php';
    }
}
