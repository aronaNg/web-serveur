<!DOCTYPE html>
<html>
<head>
  <title>Créer un thème</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h2>Créer un nouveau thème</h2>
  <form action="createTheme.php" method="post">
    <label for="label">label:</label>
    <input type="label" class="form-control" name="label" required><br>
    <input type="submit" value="Créer">
    <a href="ThemePrime.php">Annuler</a>
  </form> 
  </div>
</body>
</html>