<?php
require_once 'Theme.php';

$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');

$theme = new Theme($conn);
$themes = $theme->getThemes();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Page d'accueil</title>
  <link rel="shortcut icon" href="#">  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>


</head>
<body>
  <div class="container">
    <h1>Bienvenue sur notre site</h1>
    <table id="table_id" class="display">
        <thead>
          <tr>
            <th>ID</th>
            <th>Théme</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($themes as $row): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['label'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
  </table>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
  </div>
</body>
</html>


