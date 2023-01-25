<?php

require_once("autoload.php");


$params = array(
  "idUser" => "01",
  "login" => "popo",
  "mdp" => "2210",
  "droit"  => "01"
);


$params2 = array(
  "idUser" => "02",
  "login" => "dada",
  "mdp" => "2510",
  "droit"  => "01"
);

$j1 = new Joueur($params);
$j2 = new Joueur($params2);



$param4 = array(
  "capitaine" => false,
  "equipage" => false,
  "bateau" => false,
  "equipageComplet" => false,
  "partie" => false,
  "nbLancerDes"=> 0,
  "nbDes"=>5,
  "TableDeParLancer"=>[0]
);
$Jeubateau = new JeuBateau($param4);

  $Jeubateau->jetDeDes();

$params3 = array(
  "dateHeure" => date("h:i:s"),
  "score" => "0",
  "gagner" => "joueur1",
  "joueur" => $j1, $j2,
  "Jeu" => $Jeubateau
);
$game = new Partie($params3);


var_dump($j1);
var_dump($j2);
var_dump($game);
var_dump($Jeubateau);
