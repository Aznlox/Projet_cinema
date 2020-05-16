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
<title>Mon compte</title>
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
					<div class="fleft"><a href="../index1.php">Cinema <span>World</span></a></div>

			</div>
				<div class="row-2">
					<ul>
						<li><a href="../index1.php">Home</a></li>
            <li><a href="reservation.php">Réservation</a></li>
						<li><a href="sitemap.php">Où nous trouver</a></li>
						<?php
							if(isset($_SESSION['nom']) && !isset($_SESSION['role'])){
								echo '<li class="last"><a href="mon_compte.php" class="active">Mon compte</a></li>';
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
                <h1>Modifier vos informations</h1><br>
                <form id="contacts-form" action="../traitement/cible_modif.php" method="POST">
      						<fieldset>
      						<div class="field"><label>Votre nom:</label><input type="text" name="nom" value=<?php echo $donnee['nom']?> required/></div>
      						<div class="field"><label>Votre prenom:</label><input type="text" name="prenom" value=<?php echo $donnee['prenom']?> required/></div>
      						<div class="wrapper">
      							<button class="link2">
      								<span>
      									<span>Modifier</span>
      								</span>
      							</button>
      						</div>
      						</fieldset>
      					</form>
							</div>
              <br>
              <div class="inner">
                <h1>Vos Réservation</h1><br>
                <table>
                <tr>
                  <th>Nom</th>
                  <th>nb personnes</th>
                  <th>film</th>
                  <th>date</th>
                  <th>heure</th>
                </tr>
                <?php
                  $manage_reserv = new Manager_User;
                  $donnee = $manage_reserv->recup_reserv_user($_SESSION['email']);
                  foreach($donnee as $value) {
                    echo "<tr>
                      <td>".$value['nom']."</td>
                      <td>".$value['nb_pers']."</td>
                      <td>".$value['film']."</td>
                      <td>".$value['date']."</td>
                      <td>".$value['heure']."</td>
                    </tr>";
                  }
                  if(isset($_GET['suppr'])){
                    $manage_reserv -> suppr_reserv_user($_SESSION['email']);
                  }

                 ?>
                 </table>
                 <br>
                 <button class="link2" onclick="window.location='mon_compte.php?suppr=true'">
                  <span>Supprimer vos réservations</span>
                </button>
                <br>
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
