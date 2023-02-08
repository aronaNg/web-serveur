<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit inscrit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h2>Modification d'un thème</h2>
<form action="editTheme.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
        <label for="label">Thème</label>
        <input type="text" class="form-control" id="label" name="label"">
    </div><br>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="ThemePrime.php">Annuler</a>
</form>
</div>

</body>
</html>

