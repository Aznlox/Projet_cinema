<?php

require '../class/manager/Manager_User.php';
session_start();


$reserv = new Manager_User;

//enregistrement de la réservation dans la bdd
$reserv->reservation($_SESSION['email'], $_SESSION['nom'], $_POST['date'], $_POST['time'], $_POST['nb_pers'], $_POST['film']);

echo '<script>
alert("Réservation réussi pour le film '.$_POST['film'].' pour le '.$_POST['date'].' à '.$_POST['time'].'.");
window.location.href="../index1.php";
</script>';


 ?>
