<!DOCTYPE html>
<html>
<head>
  <title>Créer un admin</title>
  <link rel="shortcut icon" href="#">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h2>Créer un nouvel admin</h2>
  <form action="createAdmin.php" method="post">
    <label for="username">Username:</label>
    <input type="text" class="form-control" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password" required><br>
    <input type="submit" value="Créer">
    <a href="AdminPrime.php">Annuler</a>
  </form> 
  </div>
</body>
</html>