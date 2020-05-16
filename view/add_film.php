<?php session_start();
require '../class/manager/Manager_Film.php';
if(!isset($_SESSION['nom'])){
  header('location:../index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Gestion Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../lib/css/style.css" rel="stylesheet" type="text/css" />
<script src="../lib/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../lib/js/cufon-yui.js" type="text/javascript"></script>
<script src="../lib/js/cufon-replace.js" type="text/javascript"></script>
<script src="../lib/js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="../lib/js/script.js" type="text/javascript"></script>

<!--[if lt IE 7]>
	<script type="text/javascript" src="../lib/js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, .link1 span, .link1');
	</script>
	<link href="ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page6">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- HEADER -->
			<div id="header">
				<div class="row-1" "col-md-6">
					<div class="fleft"><a href="../index.php">Cinema <span>World</span></a></div>

			</div>
				<div class="row-2">
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="sitemap.php">Où nous trouver</a></li>
						<?php
							if(isset($_SESSION['nom']) && !isset($_SESSION['role'])){
								echo '<li class="last"><a href="mon_compte.php">Mon compte</a></li>';
							}
							else if(isset($_SESSION['nom']) && isset($_SESSION['role'])){
								echo '<li class="last"><a href="gestion_admin.php" class="active">Gestion Admin</a></li>';
							}
              if(isset($_SESSION['nom'])){
								echo '<li class="last"><a href="../traitement/deconnexion.php">Deconnexion</a></li>';
							}
						?>

					</ul>
				</div>
			</div>
<!-- CONTENT -->
			<div id="content">
        <div class="line-hor"></div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
                <h1>Gestion Administrateur</h1><br>
                <h4>Gérer les films</h4><br>
                <form id="contacts-form" action="../traitement/cible_add_film.php" method="POST">
                  <fieldset>
                  <div class="field"><label>Nom du film:</label><input type="text" name="film" value="" require/></div>
                  <div class="field"><label>Description:</label><input type="text" name="desc" value="" require/></div>
                  <div class="field"><label>Lien du film:</label><input type="text" name="lien" value="" placeholder="ex: /lib/images/nom_image.png" require/>Ajoutez l'affiche dans la bibliothèque d'image</div>
                  <div class="field"><label>Largeur affiche</label><input type="number" name="width" value="94" require/>Laisser comme tel si l'affiche est en format portrait</div>
                  <div class="field"><label>Hauteur affiche:</label><input type="number" name="height" value="154" require/></div>
                  <div class="wrapper">
                    <button class="link2">
                      <span>
                        <span>Ajouter</span>
                      </span>
                    </button>
                  </div>
                  </fieldset>
                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
      <br>
<!-- FOOTER -->
			<div id="footer">
				<div class="left">
					<div class="right">
							<div class="inside">Copyright - Ouaf prodution <br />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
