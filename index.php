<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Spawn</title>
</head>

<body>
  <?php
    $pdo = new PDO(
      'mysql:host=' . 'localhost' .
      ';port=' . '3306' .
      ';dbname=' . 'tp_spawn_php' .
      ';charset=' . 'UTF8', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]
    );
  ?> 

  <?php
    $query = $pdo->prepare('SELECT name FROM spawn ORDER BY rand() Limit 1');
    $query->execute();
    $villes = $query->fetchAll();
    while ($ville = $query->fetch())
    {
        echo 'Ville : ' . $ville['name'] . "\n";
    }

  ?>

  <div><h1>Générateur de spawn aléatoire</h1></div>
  <button type="button" class="btn btn-primary btn-lg">Générer un spawn</button>
  <?php 

  ?>
</body>

</html>

<!-- $nom_ville = "SELECT name FROM spawn ORDER BY rand() Limit 1"; -->