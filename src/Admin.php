<?php

class Admin {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
// si on veut hasher le mot de pass
    // public function create($username, $password) {
    //     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //     $sql = "INSERT INTO admin (username, password) VALUES (:username, :password)";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindParam(':username', $username);
    //     $stmt->bindParam(':password', $hashedPassword);
    //     return $stmt->execute();
    // }
    public function create($username, $password) {
        $sql = "INSERT INTO admin (username, password) VALUES (:username, :password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }
    

    public function read() {
        $sql = "SELECT * FROM admin";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function delete($username, $currentUsername) {
        if ($username == $currentUsername) {
            echo "Un administrateur ne peut pas se supprimer lui-même.";
            return false;
        } else {
            $sql = "DELETE FROM admin WHERE username = :username";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            return $stmt->execute();
        }
    }

}

$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
$admin = new Admin($conn);

// Exemple d'utilisation des méthodes

// Créer un nouvel inscrit
//$admin->create("email@example.com");
// Lire tous les inscrits
$admins = $Admin->read();

// Mettre à jour un inscrit
/*$admin->update(1, "newemail@example.com");
*/
// Supprimer un inscrit
//$admin->delete(4);

?>
