<?php
  function construit_url_paypal()
  {
	$api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?'; // Site de l'API PayPal. On ajoute déjà le ? afin de concaténer directement les paramètres.
	$version = 57.0; // Version de l'API

	$user = 'vendeur_1236594550_biz_api1.ouafproduction.com'; // Utilisateur API
	$pass = 'SEFYITJFG8QRHN1S'; // Mot de passe API
	$signature = 'ZWg4tSHZZ0GQIK8U6VKGWO1mxrtOAJzAGFNRnFpDWRKX-fv8q5Tuj64n'; // Signature de l'API

	$api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature; // Ajoute tous les paramètres

	return 	$api_paypal; // Renvoie la chaîne contenant tous nos paramètres.
  }

  function recup_param_paypal($resultat_paypal)
  {
	$liste_parametres = explode("&",$resultat_paypal); // Crée un tableau de paramètres
	foreach($liste_parametres as $param_paypal) // Pour chaque paramètre
	{
		list($nom, $valeur) = explode("=", $param_paypal); // Sépare le nom et la valeur
		$liste_param_paypal[$nom]=urldecode($valeur); // Crée l'array final
	}
	return $liste_param_paypal; // Retourne l'array
  }
?>
