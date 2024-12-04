<?php
namespace App\Models;

use Core\App;
use PDO;

class Jugador {
    protected static $table = "jugadors";  // Taula no canvia

    public $id;
    public $name; // Canviat a anglès
    public $team; // Canviat a anglès
    public $position; // Canviat a anglès

    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        // Assignem els valors correctes a les propietats en anglès
        $this->name = $data['name'] ?? null;
        $this->team = $data['team'] ?? null;
        $this->position = $data['position'] ?? null;
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $jugadors = [];
        foreach ($results as $result) {
            $jugadors[] = new self($result);
        }
        return $jugadors;
    }

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, team = :team, position = :position WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':team', $this->team);
            $statement->bindValue(':position', $this->position);
            $statement->execute();
        } else {
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, team, position) VALUES (:name, :team, :position)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':team', $this->team);
            $statement->bindValue(':position', $this->position);
            $statement->execute();
            $this->id = $db->lastInsertId();
        }
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
