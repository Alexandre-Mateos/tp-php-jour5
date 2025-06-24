<?php
//A chaque fois que l'on veut utilsier la session il faut session_start() avant;
session_start();

//côté serveur la session est conservé un certains temps (récupère un cookie généré par le
// navigateur. UN peu l'ID unique du cache.
// IL est possible de changer cette valeur de conservation dans le php.ini
//dans la clef test -> une string
$_SESSION['test'] = 'ma valeur de test';

//POur completement supprimer le cookie
//session_destroy()

//mettre à 0 les valeurs : on remplace $_SESSION par un tableau vide
$_SESSION = [];
?>