<?php

    try {
        $connexionBDD = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
    } catch(Exception $ex) {
        die('Erreur : '.$ex->getMessage());
    }

    // On insère le message dans la BDD
       $reqInsertMessage = $connexionBDD->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
        $reqInsertMessage->execute(array($_POST['auteur'], $_POST['commentaire'], $_POST['id_billet']));

    // On redirige le visiteur vers la page
    header('Location: ../view/article.php');

?>
