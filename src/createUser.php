<?php
require_once 'Inscription.php';
$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];

  $inscription = new Inscription($conn);
  $inscription->create($email);

  header('Location: InscriptionPrime.php');
}
?>