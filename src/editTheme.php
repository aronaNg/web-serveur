<?php
require_once 'Theme.php';
$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $label = $_POST['label'];

  $theme = new Theme($conn);
  $theme->update($id,$label);

  header('Location: ThemePrime.php');
}
?>
