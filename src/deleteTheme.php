<?php
include_once 'Theme.php';
$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

$theme = new Theme($conn);

if($theme->delete($id)){
    header('Location: ThemePrime.php');
} else{
    echo "Impossible de supprimer le theme.";
}
