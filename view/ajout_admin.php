<?php session_start();
require '../class/manager/Manager_User.php';
if(!isset($_SESSION['nom'])){
  header('location:../index1.php');
}
else{
  $modif = new Manager_User;
	$donnee = $modif->placeholder($_SESSION['email']);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Gestion Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="../lib/css/style.css" rel="stylesheet" type="text/css" />
<script src="../lib/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../lib/js/cufon-yui.js" type="text/javascript"></script>
<script src="../lib/js/cufon-replace.js" type="text/javascript"></script>
<script src="../lib/js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="../lib/js/script.js" type="text/javascript"></script>
<?php

if(isset($_SESSION['erreur_add_admin'])){
  echo '<script>alert("L\'identifiant est déjà utilisé.");</script>';
  unset($_SESSION['erreur_add_admin']);
}
else if(isset($_SESSION['add_admin'])){
  echo "<script>alert('Un compte administrateur a été ajouter avec succès.');</script>";
  unset($_SESSION['add_admin']);
}
?>
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
					<div class="fleft"><a href="../index1.php">Cinema <span>World</span></a></div>

			</div>
				<div class="row-2">
					<ul>
						<li><a href="../index1.php">Home</a></li>
						<li><a href="sitemap.php">Sitemap</a></li>
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
                <h1>Gestion Administrateur</h1><br><br>
                <form id="contacts-form" action="../traitement/cible_ajout_admin.php" method="POST">
                  <fieldset>
                    <div class="field"><label>Identifiant:</label><input type="text" name="email" required/></div>
                    <div class="field"><label>Nom:</label><input type="text" name="nom" required/></div>
                    <div class="field"><label>Prénom:</label><input type="text" name="prenom" required/></div>
                    <div class="field"><label>Mot de passe:</label><input type="Password" name="mdp" required/></div>
                    <div class="wrapper">
                    <button class="link2">
                      <span>
                        <span>Ajouter un Administrateur</span>
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
