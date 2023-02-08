<?php
require_once 'Admin.php';
$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $username = $_GET['username'];
  $currentUsername = $_SESSION['username']; // Récupérez le nom d'utilisateur actuel à partir de la session

  if ($username === $currentUsername) {
    echo 'Vous ne pouvez pas vous supprimer vous-même';
  } else {
    $admin = new Admin($conn);
    $admin->delete($username,$currentUsername);

    header('Location: AdminPrime.php');
  }
}
?>
