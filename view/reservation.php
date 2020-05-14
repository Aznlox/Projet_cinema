<!DOCTYPE html>
<html lang="fr">
<?php date_default_timezone_set('Europe/Paris'); ?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Réservation</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Medula+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../lib/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../lib/css/reservation_style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<script>
	function retour(){
		window.history.back();
	}
</script>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">

						<div class="form-header">
							<div class="form-btn2">
								<button class="submit-btn" onclick="retour()">Retour</button>
							</div>
							<h2>Réservation</h2>
							<p>Réservez une place dans notre cinéma</p>
						</div>
						<form method="post" action="../traitement/cible_reservation.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" name="date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" type="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Heure</span>
										<input class="form-control" name="time" type="time" value="<?php echo date('H:i'); ?>" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Personnes</span>
										<input class="form-control" name="nb_pers" type='number' value="1" min="1" max="20" required>
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Film</span>
										<select class="form-control" name="film" required>
                      <option>film 1</option>
                      <option>film 2</option>
                      <option>film 3</option>
                    </select>
									</div>
								</div>

							</div>
							<div class="form-btn">
								<button class="submit-btn">Valider</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
