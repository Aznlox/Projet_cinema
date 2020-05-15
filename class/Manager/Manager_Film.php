<?php

  class Manager_Film{

    private $_id;
    private $_film;
    private $_desc;
    private $_image;

    public function recup_film(){
      $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
      $req = $bdd->query('SELECT * FROM film');
      $donnee = $req->fetchall();
      return $donnee;
    }

    public function suppr_titre($film){
      $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
      $req = $bdd->prepare('SELECT * FROM film WHERE film = ?');
      $req->execute(array($film));
      $donnee = $req->fetch();
      if($donnee)
      {
        $bdd = new PDO('mysql:host=localhost;dbname=cinema','root','');
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
  }

 ?>
