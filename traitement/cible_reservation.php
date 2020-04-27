<?php

require '../class/manager/Manager_User.php';
session_start();


$reserv = new Manager;

//enregistrement de la réservation dans la bdd
$reserv->reservation($_SESSION['identifiant'], $_SESSION['nom'], $_POST['date'], $_POST['time'], $_POST['nb_pers']);

$_SESSION['date'] = $_POST['date'];
$_SESSION['time'] = $_POST['time'];
header('location: ../view/reserv_reussi.php');


 ?>
