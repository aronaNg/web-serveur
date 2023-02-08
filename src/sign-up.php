<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Page d'accueil</title>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .form {
      width: 50%;
      margin: 20px 0;
      padding: 20px;
      border: 1px solid lightgray;
      border-radius: 10px;
    }
    input[type="text"],
    input[type="password"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid lightgray;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
       border: 1px solid lightgray;
      background-color: gray;
      color: white;
    }
    h1 {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Bienvenue sur notre site</h1>
    <div class="form">
      <h2>Inscription utilisateur</h2>
      <form action="sign-up.php" method="post">
        <input type="email" name="email" placeholder="Adresse email">
        <input type="submit" value="S'inscrire">
      </form>
    </div>
  </div>
</body>
</html>

<?php

// Vérification de l'existence de données POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];

  try {
    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');

    // Préparation de la requête de sélection pour vérifier l'existence de l'adresse email
    $query_select = $db->prepare("SELECT * FROM inscription WHERE email = :email");
    $query_select->bindValue(':email', $email, PDO::PARAM_STR);

    // Exécution de la requête de sélection
    $query_select->execute();

    // Vérification de l'existence de l'adresse email
    if ($query_select->rowCount() > 0) {
      die("Cet email est déjà utilisé");
    }

    // Préparation de la requête d'insertion
    $query_insert = $db->prepare("INSERT INTO inscription (email) VALUES (:email)");

    // Liaison des valeurs à insérer
    if (!empty($email)) {
      $query_insert->bindValue(':email', $email, PDO::PARAM_STR);
    } else {
      die("Email ne peut pas être vide");
    }

    // Exécution de la requête d'insertion
    $query_insert->execute();

    // Redirection vers la page welcome.php
    header("Location: welcome.php");
    exit;
  } catch (PDOException $e) {
    // Traitement de l'erreur
    echo "Erreur : " . $e->getMessage();
  }
}

?>
