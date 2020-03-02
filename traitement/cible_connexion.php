<?php

//Traitement des données entrées dans le form de connexion
require '../class/user.php';
require '../class/user_manager.php';
session_start();

//Vérification du compte dans la bdd
$donnee = new User(['identifiant'=>$_POST['identifiant'],
                    'mdp'=>$_POST['mdp']]);

$login = new Manager;
$login->login($donnee);

?>
