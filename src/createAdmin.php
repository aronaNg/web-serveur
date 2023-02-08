<?php
require_once 'Admin.php';
$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $admin = new Admin($conn);
  $admin->create($username,$password);

  header('Location: AdminPrime.php');
}
?>