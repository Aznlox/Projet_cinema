<?php session_start();
if(!isset($_SESSION['nom'])){
  header('location:../index1.php');
}
?>

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
					<div class="fleft"><a href="index1.php">Cinema <span>World</span></a></div>

			</div>
				<div class="row-2">
					<ul>
						<li><a href="index1.html">Home</a></li>
						<li><a href="view/about-us.html">A propos de nous</a></li>
						<li><a href="view/contact-us.html">Contacts</a></li>
						<li><a href="view/sitemap.html">Sitemap</a></li>
						<li class="last"><a href="view/mon_compte.php" class="active">Mon compte</a></li>


					</ul>
				</div>
			</div>
<!-- CONTENT -->
			<div id="content">
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
                <form class="login100-form validate-form" action="../traitement/cible_modif.php" method="POST">
        					<div class="wrap-input100 validate-input m-b-26" data-validate="Le nom est nécéssaire">
        						<span class="label-input100">Nom</span>
        						<input class="input100" type="text" name="nom" value=<?php echo $donnee['nom']?> required/>
        						<span class="focus-input100"></span>
        					</div>
        					<div class="wrap-input100 validate-input m-b-26" data-validate="le prénom est nécéssaire">
        						<span class="label-input100">Prénom</span>
        						<input class="input100" type="text" name="prenom" value=<?php echo $donnee['prenom']?> required/>
        						<span class="focus-input100"></span>
        					</div>
        					<div class="wrap-input100 validate-input m-b-26" data-validate="le mail est nécéssaire">
        						<span class="label-input100">Mail</span>
        						<input class="input100" type="email" name="email" value=<?php echo $donnee['email']?> required/>
        						<span class="focus-input100"></span>
        					</div>

        					<div class="container-login100-form-btn">
        						<button class="login100-form-btn">
        							Modifier
        						</button>
        					</div>
        				</form>
							</div>
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
