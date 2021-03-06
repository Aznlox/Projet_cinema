<?php session_start();
			require 'class/manager/Manager_Film.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Accueil</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="lib/css/style.css" rel="stylesheet" type="text/css" />
<script src="lib/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="lib/js/cufon-yui.js" type="text/javascript"></script>
<script src="lib/js/cufon-replace.js" type="text/javascript"></script>
<script src="lib/js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="lib/js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, .link1 span, .link1');
	</script>
	<link href="/viewie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- HEADER -->
			<div id="header">
				<div class="row-1" "col-md-6">
					<div class="fleft"><a href="index.php">Cinema <span>World</span></a></div>
					<div class="row-1" "col-md-12">
						<br>
						<div><?php
									//Connexion ou connecté
									if(isset($_SESSION['nom'])){
									echo "Bienvenue ".$_SESSION['nom'];
								}
								else{
									echo '<a href="view/form_inscription.php" class="myButton">Inscription</a>
												<a href="view/form_connexion.php" class="myButton">Connexion</a>';
								}
								?><br></div>
						</div>
			</div>
				<div class="row-2">
					<ul>
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="view/reservation.php">Réservation</a></li>;
						<li><a href="view/sitemap.php">Où nous trouver</a></li>
						<?php
							//affichage des boutons si connecté ou non
							if(isset($_SESSION['nom']) && !isset($_SESSION['role'])){
								echo '<li class="last"><a href="view/mon_compte.php">Mon compte</a></li>';
							}
							else if(isset($_SESSION['nom']) && isset($_SESSION['role'])){
								echo '<li class="last"><a href="view/gestion_admin.php">Gestion Admin</a></li>';
							}
							if(isset($_SESSION['nom'])){
								echo '<li class="last"><a href="traitement/deconnexion.php">Deconnexion</a></li>';
							}
						?>

					</ul>
				</div>
			</div>
<!-- CONTENT -->
			<div id="content">
				<div id="slogan">
					<div class="image png"></div>
					<div class="inside">
						<h2>Il n'y a plus<span>DE LIMITE</span></h2>
						<p>Bienvenue dans un cinéma extraordinaire avec un choix de film effarant mdr</p>
					</div>
				</div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
								<h3>Welcome to <b>Cinema</b> <span>World</span></h3>
								<p>Ceci est le cinéma le plus claqué au sol.</p>
								<div class="img-box1"><img src="lib/images/1page-img1.jpg" alt="" />Dans ce cinéma tu retrouveras des parodies de films actuels ou des création originales. Après je ne sais plus trop quoi écrire pour ralonger ce dialogue, mais sois au courant que je suis très heureux de pouvoir te parler et que tu as predu 5 min de ta vie à lire tout ça. </div>
								<div class="row-1" "col-md-6">
									<?php
									if(isset($_SESSION['nom']) && !isset($_SESSION['role'])){
										echo '<div class="wrapper"><a href="view/article.php" class="link1"><span><span>Espace Commentaires</span></span></a></div>';
									}
									?>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<h3>Film <span>à l'affiche</span></h3>
					<ul class="movies">
						<?php
							//Affichage des films
							$get_film = new Manager_Film;
							$donnee = $get_film->recup_film();
							foreach($donnee as $value) {
								echo '<li class="last">
									<CENTER><h4>'.$value['film'].'</h4><img src='.$value['image'].' alt="" width="'.$value['width'].'px" height="'.$value['height'].'px" /></CENTER>
									<p>'.$value['description'].'</p>
								</li>';
							}
						 ?>
						<li class="clear">&nbsp;</li>

					</ul>
				</div>
			</div>
		</br>
	</br>
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
