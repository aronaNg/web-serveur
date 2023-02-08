<?php

class Theme {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($label) {
        $sql = "INSERT INTO theme (label) VALUES (:label)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':label', $label);
        return $stmt->execute();
    }

    public function read() {
        $sql = "SELECT * FROM theme";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($id, $label) {
        $sql = "UPDATE theme SET label = :label WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':label', $label);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM theme WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getThemeCount() {
        $sql = "SELECT COUNT(*) as count FROM theme";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['count'];
      }
    public function getThemes() {
        $sql = "SELECT * FROM theme";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
      

}

$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
$theme = new Theme($conn);

// Exemple d'utilisation des méthodes

// Créer un nouvel inscrit
//$theme->create("label@example.com");
// Lire tous les inscrits
$inscrits = $theme->read();

// Mettre à jour un inscrit
/*$theme->update(1, "newlabel@example.com");
*/
// Supprimer un inscrit
//$theme->delete(4);

?>
