<?php
  session_start();
  require '../class/manager/Manager_Film.php';
  $manage_film = new Manager_Film;
  $donnee = $manage_film->add_film($_POST['film'], $_POST['desc'], $_POST['lien'], $_POST['width'], $_POST['height']);

?>
