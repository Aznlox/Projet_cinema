<?php
  //Traitement des données entrées dans le form d'inscription
  require '../class/user.php';
  require '../class/user_manager.php';
  session_start();
  //Vérification du mdp
  if($_POST['mdp'] != $_POST['confirmmdp']){
    $_SESSION['erreur_inscr'] = "Erreur dans le mot de passe.";
    header('Location: ../view/inscription.php');
  }
  //ajout dans la bdd
  else{
    $inscription = new User(['nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                    'mail'=>$_POST['mail'],
                    'tel'=>$_POST['tel'],
                    'identifiant'=>$_POST['identifiant'],
                    'mdp'=>$_POST['mdp']]);
    $inscrit = new Manager;
    $inscrit->envoiebdd($inscription);
  }

?>
