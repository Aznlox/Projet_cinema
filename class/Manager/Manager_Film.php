<?php

  class Manager_Film{

    private $_id;
    private $_film;
    private $_desc;
    private $_image;

    //récupère les informations des film pour l'affichage
    public function recup_film(){
      $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
      $req = $bdd->query('SELECT * FROM film');
      $donnee = $req->fetchall();
      return $donnee;
    }

    //suppression d'un film dans la bdd
    public function suppr_titre($film){
      $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
      $req = $bdd->prepare('SELECT * FROM film WHERE film = ?');
      $req->execute(array($film));
      $donnee = $req->fetch();
      if($donnee)
      {
        $req = $bdd->prepare('DELETE FROM film WHERE film = ?');
        $req->execute(array($film));
        header('location:../view/manage_film.php');
      }
      else{
        echo '<script>
        alert("Le film n\'existe pas.");
        window.location.href="../view/manage_film.php";
        </script>';
      }
    }

    //ajout d'un film dans la bdd
    public function add_film($film, $desc, $lien, $width, $height){
      $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
      $req = $bdd->prepare('SELECT * FROM film WHERE film = ?');
      $req->execute(array($film));
      $donnee = $req->fetch();
      if($donnee)
      {
        echo '<script>
        alert("Le film existe déjà.");
        window.location.href="../view/manage_film.php";
        </script>';
      }
      else {
        $req = $bdd->prepare('INSERT into film (film, description, image, width, height) value(?,?,?,?,?)');
        $req -> execute(array($film, $desc, $lien, $width, $height));
        header('Location: ../view/manage_film.php');
      }
    }
  }

 ?>
