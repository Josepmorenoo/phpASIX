<?php

namespace App\Models;

use Core\App;
use PDO;

class Jugador {
    protected static $table = "jugadors";  // Nom de la taula de jugadors a la base de dades

    public $id;
    public $nom;
    public $equip;
    public $posicio;
    public $any_naixement;

    // Constructor que assigna valors per defecte als atributs
    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->nom = isset($data['nom']) ? $data['nom'] : null;
        $this->equip = isset($data['equip']) ? $data['equip'] : null;
        $this->posicio = isset($data['posicio']) ? $data['posicio'] : null;
        $this->any_naixement = isset($data['any_naixement']) ? $data['any_naixement'] : null;
    }

    // Obté tots els jugadors de la base de dades
    public static function all() {
        $db = App::get('database')->getConnection();  // Connexió a la base de dades
        $statement = $db->prepare('SELECT * FROM ' . static::$table);  // Selecciona tots els registres
        $statement->execute();  // Executa la consulta
        $jugadors = [];
        $results = $statement->fetchAll();  // Obté tots els resultats
        foreach ($results as $result) {
            $jugadors[] = new self($result);  // Crea una instància del model per a cada jugador
        }
        return $jugadors;
    }

    // Troba un jugador per la seva ID
    public function find($id) {
        $db = App::get('database')->getConnection();  // Connexió a la base de dades
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');  // Consulta per la ID
        $statement->bindValue(':id', $id);  // Afegeix el paràmetre ID a la consulta
        $statement->execute();  // Executa la consulta
        $data = $statement->fetch();  // Obté el jugador

        return $data ? new self($data) : null;  // Retorna una instància del model si es troba el jugador
    }

    // Guarda el jugador a la base de dades (insert o update)
    public function save() {
        $db = App::get('database')->getConnection();  // Connexió a la base de dades

        if ($this->id) {
            // Si el jugador ja existeix, actualitza els seus valors
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET nom = :nom, equip = :equip, posicio = :posicio, any_naixement = :any_naixement WHERE id = :id');
            $statement->bindValue(':id', $this->id);  // Afegeix l'ID a la consulta
            $statement->bindValue(':nom', $this->nom);  // Afegeix el nom
            $statement->bindValue(':equip', $this->equip);  // Afegeix l'equip
            $statement->bindValue(':posicio', $this->posicio);  // Afegeix la posició
            $statement->bindValue(':any_naixement', $this->any_naixement);  // Afegeix l'any de naixement
            $statement->execute();  // Executa la consulta
        } else {
            // Si el jugador no existeix, fa una inserció
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (nom, equip, posicio, any_naixement) VALUES (:nom, :equip, :posicio, :any_naixement)');
            $statement->bindValue(':nom', $this->nom);  // Afegeix el nom
            $statement->bindValue(':equip', $this->equip);  // Afegeix l'equip
            $statement->bindValue(':posicio', $this->posicio);  // Afegeix la posició
            $statement->bindValue(':any_naixement', $this->any_naixement);  // Afegeix l'any de naixement
            $statement->execute();  // Executa la consulta

            // Obté l'ID de l'últim jugador inserit
            if (!$this->id) {
                $this->id = $db->lastInsertId();  // Assigna l'ID a l'objecte
            }
        }
    }

    // Elimina un jugador per la seva ID
    public function delete($id) {
        $db = App::get('database')->getConnection();  // Connexió a la base de dades
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');  // Consulta per eliminar el jugador
        $statement->bindValue(':id', $id);  // Afegeix l'ID a la consulta
        $statement->execute();  // Executa la consulta
    }
}
