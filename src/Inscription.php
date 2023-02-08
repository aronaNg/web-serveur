<?php

class Inscription {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($email) {
        $sql = "INSERT INTO inscription (email) VALUES (:email)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }

    public function read() {
        $sql = "SELECT * FROM inscription";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($id, $email) {
        $sql = "UPDATE inscription SET email = :email WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM inscription WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getInscriptionCount() {
        $sql = "SELECT COUNT(*) as count FROM inscription";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['count'];
      }

    public function inscriptionTheme($inscriptionId, $themeId) {
        $sql = "INSERT INTO theme_inscription (inscription_id, theme_id) VALUES (:inscription_id, :theme_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':inscription_id', $inscriptionId);
        $stmt->bindParam(':theme_id', $themeId);
        return $stmt->execute();
    }
      

}

$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
$inscription = new Inscription($conn);

// Exemple d'utilisation des méthodes

// Créer un nouvel inscrit
//$inscription->create("email@example.com");
// Lire tous les inscrits
$inscrits = $inscription->read();

// Mettre à jour un inscrit
/*$inscription->update(1, "newemail@example.com");
*/
// Supprimer un inscrit
//$inscription->delete(4);

?>
