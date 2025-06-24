<?php

session_start();

if(!isset($_SESSION['accueil'])){
      $_SESSION['accueil'] = 0;
}

if(!isset($_SESSION['test'])){
      $_SESSION['test'] = 0;
}

if(!isset($_SESSION['contact'])){
      $_SESSION['contact'] = 0;
}

if(!isset($_SESSION['random'])){
      $_SESSION['random'] = 0;
}
?>