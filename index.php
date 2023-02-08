<?php

$host = 'localhost';
$dbname = 'webserveur';
$username = 'arona';
$password = 'Aronangom2000@';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->execute(array(
        ':username' => $username,
        ':password' => $password
    ));
    $count = $stmt->rowCount();
    if ($count == 1) {
        // Redirect to dashboard
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: src/dashboardPrime.php');
        
    } else {
        // Login failed
        $error = "Invalid username or password";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Page d'accueil</title>
  <link rel="shortcut icon" href="#">
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
      <h2>Connexion administrateur</h2>
      <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Nom d'utilisateur">
        <input type="text" name="password" placeholder="Mot de passe">
        <input type="submit" name="submit" value="Se connecter">
        Pas encore de compte? <a href="src/sign-up.php">S'inscrire</a>
      </form>
      <?php if (isset($error)) { echo $error; } ?>
    </div>
    
  </div>
</body>
</html>

