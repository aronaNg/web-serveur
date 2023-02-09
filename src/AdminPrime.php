<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page d'accueil des admins</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container my-4">
<table id="table_id" class="display">
  <thead>
    <tr>
      <th>Username</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($admins as $row) {
      echo '<tr>';
      echo '<td>' . $row['username'] . '</td>';
      echo '<td>
        <a href="deleteAdmin.php?id=' . $row['username'] . '">Delete</a>
      </td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

<a href="createAdminPrime.php">Create admin</a><br><br>
<a href="dashboardPrime.php">Retourner au dashboard</a>

</div>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>

<?php
require_once 'Admin.php';

$conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');
$admin = new Admin($conn);

$admins = $admin->read();
?>

