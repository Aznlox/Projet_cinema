<!DOCTYPE html>
<html>
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
        <h1>Espace commentaire !</h1>
        <p>Derniers billets du cinema :</p>

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

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, titre, contenu, NomF, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['NomF']); ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>

    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br />
    <em><a href="commentaire.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>


<div class="wrapper"><a href="../index1.php" class="link2"><span><span>Retourne au menu principal</span></span></a></div>
</body>
</html>
