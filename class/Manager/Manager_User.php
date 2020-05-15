<?php
//Manager
require_once(__DIR__.'/../modele/User.php');
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
      $mail->SetFrom($inscription->getEmail());
      $mail->Subject = "[ Création de compte réussi";
      $mail->Body = "<center><b>Cinema</b><br><p>Bonjour ! Votre compte a été créé.</p></center></html>";
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
  public function connexion(User $connexion){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
    $req = $bdd->prepare('SELECT * from compte where email = ? AND mdp = ?');
    $req->execute(array($connexion->getEmail(), SHA1($connexion->getMdp())));
    $donnee = $req->fetch();
    if ($donnee){
      $_SESSION['email'] = $donnee['email'];
      $_SESSION['nom'] = $donnee['nom'];
      if ($donnee['role'] == "admin"){
        $_SESSION['role'] = $donnee['role'];
      }
      header('location: ../index1.php');
    }
    else{
      $_SESSION['erreur_login'] = "Email ou mdp erroné";
      header('location: ../view/form_connexion.php');
    }
  }

  //Récupération des données utilisateur pour la modification
  public function placeholder($email){

    $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
    $req = $bdd->prepare('SELECT nom, prenom, email from compte where email = ?');
    $req->execute(array($email));
    $donnee = $req->fetch();
    return $donnee;
  }

  //Update des données utilisateur dans la bdd
  public function modification(User $modif, $email){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
    $req = $bdd->prepare('UPDATE compte SET nom = ?, prenom = ? WHERE email = ?');
    $req->execute(array($modif->getNom(), $modif->getPrenom(), $email));
    header('location: ../index1.php');
    //actualisation du nom de l'utilisateur dans les pages
    $req = $bdd->prepare('SELECT nom from compte where email = ?');
    $req->execute(array($email));
    $donnee = $req->fetch();
    $_SESSION['nom'] = $donnee['nom'];
  }

  //reservation dans la bdd
  public function reservation($email, $nom, $date, $heure, $nb_pers, $film){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
    $req = $bdd->prepare('INSERT into reservation (email, nom, nb_pers, film, date, heure) value(?,?,?,?,?,?)');
    $req -> execute(array($email, $nom, $nb_pers, $film, $date, $heure));
  }

  public function inscrip_admin(User $inscription){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
    $req = $bdd->prepare('SELECT * FROM compte WHERE email = :email');
    $req->execute(array('email'=>$inscription->getEmail()));
    $donnee = $req->fetch();
    if($donnee)
    {
      $_SESSION['erreur_add_admin'] = "L'identifiant est déjà utilisé.";
      header('Location: ../view/ajout_admin.php');
    }
    else{
      $req = $bdd->prepare('INSERT into compte (nom, prenom, email, mdp, role) value(?,?,?,?, "admin")');
      $req -> execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getEmail(), SHA1($inscription->getMdp())));

      $_SESSION['add_admin'] = "Un compte administrateur a été ajouter avec succès.";
      header('Location: ../view/ajout_admin.php');
    }
  }
}
?>
