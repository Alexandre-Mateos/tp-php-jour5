<?php
session_start();
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
<a href="destroySession.php">Deconnexion</a>
<?php if(isset($_SESSION['user'])) : ?>
      <p>Vous êtes connecté en tant que <?php echo $_SESSION['user'] ?>  </p>
<?php else : ?>
      <p>Vous n'êtes pas connecté</p>
<?php endif; ?>
</body>
</html>
