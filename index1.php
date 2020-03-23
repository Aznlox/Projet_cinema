<<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Home - Home Page | Cinema - Free Website Template from Templates.com</title>
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
					<div class="fleft"><a href="index.html">Cinema <span>World</span></a></div>
					<div class="row-1" "col-md-6">
					<?php if(isset($_SESSION['nom'])){
									echo "Bienvenue ".$_SESSION['nom'];
								}
								else{
									echo '<a href="view/form_inscription.php" class="myButton">Inscription</a>
												<a href="view/form_connexion.php" class="myButton">Connexion</a>';
								}
								?>
						</div>
			</div>
				<div class="row-2">
					<ul>
						<li><a href="index1.html" class="active">Home</a></li>
						<li><a href="view/about-us.html">A propos de nous</a></li>
						<li><a href="view/contact-us.html">Contacts</a></li>
						<li class="last"><a href="view/sitemap.html">Sitemap</a></li>
					</ul>
				</div>
			</div>
<!-- CONTENT -->
			<div id="content">
				<div id="slogan">
					<div class="image png"></div>
					<div class="inside">
						<h2>Il n'y a plus<span>DE LIMITE</span></h2>
						<p>Bienvenue dans un cinéma extraordinaire avec un choix de film effarant qui s'élève au nombre de 3 films mdr</p>
						<div class="wrapper"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
					</div>
				</div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
								<h3>Welcome to <b>Cinema</b> <span>World</span></h3>
								<p>Cinema World Site is a free web template created by TemplateMonster.com team. This website template is optimized for 1024X768 screen resolution. It is also XHTML &amp; CSS valid.</p>
								<div class="img-box1"><img src="lib/images/1page-img1.jpg" alt="" />This website template can be delivered in two packages - with PSD source files included and without them. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the template ZIP package to be delivered to.</div>
								<p>This website template has several pages: <a href="index.html">Home</a>, <a href="about-us.html">About us</a>, <a href="articles.html">Articles</a> (with Article page), <a href="contact-us.html">Contact us</a> (note that contact us form – doesn’t work), <a href="sitemap.html">Site Map</a>.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<h3>Fresh <span>Movies</span></h3>
					<ul class="movies">
						<li>
							<CENTER><h4>Shrekt 3</h4><img src="lib/images/Shrekt.jpg" alt="" width="94px" height="154px" /></CENTER>
							<p>Shrek retourne dans une nouvelle aventure pour exercé sa vengeance après que Nathan Goncalves est kidnappé Fiona(il est dans la merde)!</p>
							<div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
						</li>
						<li>
							<CENTER><h4>Dark</h4><img src="lib/images/dark.png" alt="" width="94px" height="154px"/></CENTER>
							<p>cest trop bien cest trop bien cest trop bien cest trop bien cest trop bien cest trop bien cest trop bien cest trop bien cest trop bien cest trop bien cest trop bien</p>
							<div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
						</li>
						<li class="last">
							<CENTER><h4>GFL: Depression is coming.</h4><img src="lib/images/sad.jpg" alt="" width="280px" height="154px" /></CENTER>
							<p>Suivez les aventures de l'AR team dans une quête remplie de rebondissement et de larmes, en gros tu vas chialer frère.</p>
							<div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
						</li>
						<li class="clear">&nbsp;</li>
					</ul>
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
