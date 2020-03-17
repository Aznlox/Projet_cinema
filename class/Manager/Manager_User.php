<?php
//Manager
require_once('E:\wamp64\www\git\Projet_cinema\class\modele/User.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Manager_User{

  private $_nom;
  private $_prenom;
  private $_email;
  private $_mdp;

//Inscription dans la bdd
  public function envoiebdd(User $inscription){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
    $req = $bdd->prepare('SELECT * FROM compte WHERE email = :email');
    $req->execute(array('email'=>$inscription->getEmail()));
    $donnee = $req->fetch();
    if($donnee)
    {
      $_SESSION['erreur_inscr'] = "L'email est déjà utilisé.";
      header('Location: ../view/form_inscription.php');
    }
    else{
      $req = $bdd->prepare('INSERT into compte (nom, prenom, email, mdp) value(?,?,?,?)');
      $req -> execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getEmail(), SHA1($inscription->getMdp())));
      header('Location: ../view/confirm_inscription.php');
    }
  }
      //Envoie de mail
      /*require '../vendor/PHPMailer/PHPMailer/src/Exception.php';
      require '../vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
      require '../vendor/PHPMailer/PHPMailer/src/SMTP.php';

      $mail = new PHPMailer(); // fondation d'un nouvel objet
      $mail->CharSet = 'UTF-8';
      $mail->IsSMTP(); // activer SMTP
      $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication activée
      $mail->SMTPSecure = 'ssl'; // transfer sécurisé activé et néscéssaire notement pour gmail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = "quentin.lignani.schuman@gmail.com";
      $mail->Password = "Admwb2000";
      $mail->SetFrom($inscription->getMail());
      $mail->Subject = "[Le Romarin] : Création de compte réussi";
      $mail->Body = "<center><b>Le Romarin</b><br><p>Bonjour ! Votre compte a été créé.</p></center></html>";
      $mail->AddAddress($inscription->getMail());
      if(!$mail->Send())
      {
         echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else {
         echo "Message has been sent";
      }

      header('location: ../view/connexion.php');
    }
  }*/

  //Connexion
  public function login(User $login){
    $bdd = new PDO('mysql:host=localhost;dbname=projet_restoration','root','');
    $req = $bdd->prepare('SELECT * from compte where mail = ? AND mdp = ?');
    $req->execute(array($login->getMail(), SHA1($login->getMdp())));
    $donnee = $req->fetch();
    if ($donnee){
      $_SESSION['mail'] = $donnee['mail'];
      $_SESSION['prenom'] = $donnee['prenom'];
      $_SESSION['nom'] = $donnee['nom'];
      if (!is_null($donnee['role'])){
        $_SESSION['role'] = $donnee['role'];
      }
      header('location: ../inde.php');
    }
    else{
      $_SESSION['erreur_login'] = "Mail ou mdp erroné";
      header('location: ../view/connexion.php');
    }
  }
}
?>
