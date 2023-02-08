<html>
  <head>
    <title>Tableau de bord administrateur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Tableau de bord administrateur</h1>
    <div class="container">
    <?php
      require_once 'dashboard.php';
      require_once 'Inscription.php';
      require_once 'Theme.php';
      // phase d'essai avant de recupérer les données de la bdd
      $conn = new PDO('mysql:host=localhost;dbname=webserveur', 'arona', 'Aronangom2000@');

      $inscription = new Inscription($conn);
      $inscriptionCount = $inscription->getInscriptionCount();

      $theme = new Theme($conn);
      $themeCount = $theme->getThemeCount();

      $dashboard = new Dashboard($inscriptionCount, $themeCount);
    ?>
    <p>Veuillez cliquez sur l'un des compteurs</p>
    <a href="InscriptionPrime.php"> Nombre d'inscriptions : <?php echo $dashboard->getInscriptionCount(); ?></a> ou
    <a href="ThemePrime.php"> Nombre de thèmes : <?php echo $dashboard->getThemeCount(); ?></a><br><br>
    <a href="AdminPrime.php"> Voir les administrateurs du site</a>
    </div>
    
    </div>
  </body>
</html>
