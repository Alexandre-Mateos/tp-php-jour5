<?php
include "conditions.php";
$_SESSION['accueil'] += 1;

?>

<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>
<div>
      <a href="test.php">test</a>
      <a href="random.php">random</a>
      <a href="contact.php">contact</a>
</div>

      <?php foreach($_SESSION as $index => $visited) : ?>
            <p> la page <?php echo $index ?> a été visité <?php echo $visited ?> fois.</p>
      <?php endforeach; ?>
<div>
      <a href="destroy-session.php">Réinitialiser les compteurs</a>
</div>
</body>
</html>
