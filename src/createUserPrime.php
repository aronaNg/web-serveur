<!DOCTYPE html>
<html>
<head>
  <title>Creer un inscrit</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h2>Créer un nouvel inscrit</h2>
  <form action="createUser.php" method="post">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" required><br>
    <input type="submit" value="Créer">
    <a href="InscriptionPrime.php">Annuler</a>
  </form> 
  </div>
</body>
</html>