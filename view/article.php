<!DOCTYPE html>
<html>
<?php
session_start();
require '../class/manager/Manager_Film.php';

if(!isset($_SESSION['nom'])){
  header('location:form_connexion.php?reserv=true');
}
$nom_film = new Manager_Film;
$donnee = $nom_film->recup_film();

date_default_timezone_set('Europe/Paris'); ?>
    <head>
        <meta charset="utf-8" />
        <title>Espace billet et commentaire</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Place your description here" />
        <meta name="keywords" content="put, your, keyword, here" />
        <meta name="author" content="Templates.com - website templates provider" />
        <link href="lib/css/style.css" rel="stylesheet" type="text/css" />
        <script src="lib/js/jquery-1.4.2.min.js" type="text/javascript"></script>
        <script src="lib/js/cufon-yui.js" type="text/javascript"></script>
        <script src="lib/js/cufon-replace.js" type="text/javascript"></script>
        <script src="lib/js/Gill_Sans_400.font.js" type="text/javascript"></script>
        <script src="lib/js/script.js" type="text/javascript"></script>
	<link href="style.css" rel="stylesheet" />
    </head>

    <body>
      <h1><font color="red"> Disclaimer ! : A cause de quelque difficulté technique l'ajout de commentaire ne se fait que depuis la base de donnée</h1> </font>
        <h1>Espace commentaire !</h1>
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>

<form method="post" action="../traitement/commentaire_post.php">
<div class="row">

<form method="post" action="../traitement/commentaire_post.php">
    <label for="story">Commentaire:</label>

<textarea id="commentaire" name="commentaire"
          rows="5" cols="33">
</textarea>
</br>
</br>
</br>
<div class="col-md-6">
  <div class="form-group">
    <span class="form-label">Film</span>
    <select class="form-control" name="film" required>
      <?php
        session_start();
        require '../class/manager/Manager_User.php';
        $nom_film = new Manager_Film;
        $donnee = $nom_film->recup_film();
        foreach($donnee as $value) {
          echo '<option>'.$value['film'].'</option>';
        }
       ?>
  </br>
    <input type="submit" value="Envoyer"/>


<div class="wrapper"><a href="../index1.php" class="link2"><span><span>Retourne au menu principal</span></span></a></div>
</body>
</html>
