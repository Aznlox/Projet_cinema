<?php
  session_start();

  //déconnexion de compte
  session_destroy();
  header('location:../index1.php');
 ?>
