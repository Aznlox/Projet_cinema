<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Où nous trouver</title>
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
					<div class="fleft"><a href="index.php">Cinema <span>World</span></a></div>
					<div class="row-1" "col-md-12">
						<br>
						<div><?php if(isset($_SESSION['nom'])){
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
						<li><a href="../index.php">Home</a></li>
						<?php
							if(isset($_SESSION['nom']) && !isset($_SESSION['role'])){
								echo '<li><a href="reservation.php">Réservation</a></li>';
							}
						?>
						<li><a href="sitemap.php" class="active">Où nous trouver</a></li>
						<?php
							if(isset($_SESSION['nom']) && !isset($_SESSION['role'])){
								echo '<li class="last"><a href="mon_compte.php">Mon compte</a></li>';
							}
							else if(isset($_SESSION['nom']) && isset($_SESSION['role'])){
								echo '<li class="last"><a href="gestion_admin.php">Gestion Admin</a></li>';
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
								<h3>Localisation de notre <span>Cinéma</span></h3>
								<p>Ici vous retrouverez une belle carte google map qui indique notre position :)</p>

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1311.4285346944346!2d2.375405558297906!3d48.8990610580745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c2c66f44dff%3A0xff07d1b7ba837f79!2sUGC%20Cin%C3%A9%20Cit%C3%A9%20Paris%2019!5e0!3m2!1sfr!2sfr!4v1589553146966!5m2!1sfr!2sfr" width="850" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>
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
