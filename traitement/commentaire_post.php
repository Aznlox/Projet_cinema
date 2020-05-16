<?php
session_start();
require '../class/manager/Manager_Film.php';
if(!isset($_SESSION['nom'])){
  header('location:form_connexion.php?reserv=true');
}
try {
        $connexionBDD = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
    } catch(Exception $ex) {
        die('Erreur : '.$ex->getMessage());
    }

    // On insère le message dans la BDD
       $reqInsertMessage = $connexionBDD->prepare('INSERT INTO commentaires(nom, commentaire, film, date_commentaire) VALUES(?, ?, ?, NOW())');
      $a = $reqInsertMessage->execute(array($_SESSION['nom'], $_POST['commentaire'], $_POST['film']));

    // On redirige le visiteur vers la page
    header('Location: ../view/article.php');

?>
