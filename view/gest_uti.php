<?php session_start();
require '../class/manager/Manager_User.php';
if(!isset($_SESSION['nom'])){
  header('location:../index.php');
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
<link href="../lib/css/style.css" rel="stylesheet" type="text/css" />
<link href="../lib/css/tableau.css" rel="stylesheet" type="text/css">
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
                <h1>Gestion Administrateur</h1><br><br>
      						<fieldset>
      						<div class="wrapper">
                    <table>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Email</th>
                      <th>Role</th>
                    </tr>
                    <?php
        							$affiche_user = new Manager_User;
        							$donnee = $affiche_user->recup_user();
        							foreach($donnee as $value) {
        								echo "<tr>
                          <td>".$value['nom']."</td>
                          <td>".$value['prenom']."</td>
                          <td>".$value['email']."</td>
                          <td>".$value['role']."</td>
                        </tr>";
        							}
        						 ?>
                     </table>
                     <br>
                     <button class="link2" onclick="window.history.back();">
       								<span>Retour</span>
       							</button>
      						 </div>
      						</fieldset>
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
