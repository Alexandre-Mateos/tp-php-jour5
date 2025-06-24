<?php
session_start();
$users = [
      ["login" => "alice", "password" => "1234"],
      ["login" => "bob", "password" => "azerty"],
      ["login" => "charlie", "password" => "mdp"],
      ["login" => "david", "password" => "pass123"],
      ["login" => "eve", "password" => "12345"],
      ["login" => "frank", "password" => "secret"],
      ["login" => "grace", "password" => "abc123"],
      ["login" => "heidi", "password" => "pwdpwd"],
      ["login" => "ivan", "password" => "0000"],
      ["login" => "judy", "password" => "monkey"],
];

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
<form method="post">
      <label for="login">Login</label>
      <input id="login" type="text" name="login">
      <label for="mdp">Mot de passe</label>
      <input id="mdp" type="text" name="mdp">
      <button type="submit">Valider</button>
</form>

<?php
if(
      (isset($_POST['login']) && strlen($_POST['login']) >=1)
      && (isset($_POST['mdp']) && strlen($_POST['mdp']) >=1)
) {
      foreach ($users as $user) {
            if (($user['login'] === $_POST['login']) && $user['password'] === $_POST['mdp']) {
                  $_SESSION['user'] = $_POST['login'];
                  header("Location: index.php");
                  exit();
            }
      }
            echo "<p> Utilisateur ou mot de passe inconnu</p>";
}else{
      echo "<p>Vous devez remplir tous les champs</p>";
}



?>


</body>
</html>
