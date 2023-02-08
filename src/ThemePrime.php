<?php
require_once 'Theme.php';

$pdo = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
$theme = new Theme($pdo);

$themes = $theme->read();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page d'accueil des thèmes</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
</head>
<body>

<table id="table_id" class="display">
  <thead>
    <tr>
      <th>ID</th>
      <th>Label</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($themes as $row) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['label'] . '</td>';
      echo '<td>
        <a href="editThemeP.php?id=' . $row['id'] . '">Edit</a>
        <a href="deleteTheme.php?id=' . $row['id'] . '">Delete</a>
      </td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

<a href="createThemePrime.php">Create</a>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>