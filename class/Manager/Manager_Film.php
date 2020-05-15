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

  }

 ?>
