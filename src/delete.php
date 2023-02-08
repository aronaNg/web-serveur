<?php
include_once 'Inscription.php';
$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

$inscription = new Inscription($conn);

if($inscription->delete($id)){
    header('Location: InscriptionPrime.php');
} else{
    echo "Impossible de supprimer l'inscription.";
}
