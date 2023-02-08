<?php
require_once 'Theme.php';
$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $label = $_POST['label'];

  $theme = new Theme($conn);
  $theme->create($label);

  header('Location: ThemePrime.php');
}
?>