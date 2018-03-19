<?php

// si movaise saisie redirige vers la page home

if (isset($_GET['p'])) {

  $p = $_GET['p'];

} else {
  $p = 'accueil';
}

ob_start();

if($p === 'accueil'){
  include('page/accueil.php');
}

if ($p === 'profil') {

  include ('page/profil.php');
}

if ($p === 'formulaire') {

  include ('page/formulaire.php');
}

if ($p === 'formdemande') {

  include ('page/formdemande.php');
}

if ($p === 'formoffre') {

  include ('page/formoffre.php');
}

if ($p === 'homeco') {

  include ('page/homeco.php');
}

if ($p === 'accueilform') {

  include ('page/accueilform.php');
}

$content = ob_get_clean();
include('page/template/default.php');

?>
