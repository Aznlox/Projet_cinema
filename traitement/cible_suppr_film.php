<?php
  session_start();
  require '../class/manager/Manager_Film.php';

  //suppression de film dans la bdd
  $manage_film = new Manager_Film;
  $donnee = $manage_film->suppr_titre($_POST['film']);

?>
