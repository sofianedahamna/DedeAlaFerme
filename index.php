<?php

require_once("autoload.php");

/**  
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
  "nbLancerDes" => 0,
  "nbDes" => 5,
  "TableDeParLancer" => [0]
);
$Jeubateau = new JeuBateau($param4);
$Jeubateau->lancerDe();
$Jeubateau->jetDeDes();


$params3 = array(
  "dateHeure" => date("h:i:s"),
  "score" => "0",
  "gagner" => "joueur1",
  "joueur" => $j1, $j2,
  "Jeu" => $Jeubateau
);
$game = new Partie($params3);



var_dump($j2);
var_dump($game);
var_dump($Jeubateau); */
?>

<?php
if (isset($_POST["idUser"]) && isset($_POST["login"]) && isset($_POST["mdp"]) && isset($_POST["droit"])) {
  $params = array(
    "idUser" => $_POST["idUser"],
    "login" => $_POST["login"],
    "mdp" => $_POST["mdp"],
    "droit" => $_POST["droit"]
  );
  $j1 = new Joueur($params);
  var_dump($j1);
  var_dump($params);

  if ($j1 == true) {

    $game = new JeuBateau();
    $game->lancerDe();
    var_dump($game);
    if(){
    
  }
  }
  
}
?>
<html lang="fr">
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
  <input type="hidden" name="action" value="lancerPartie">
  <button>
    <?php
    if (isset($_POST['action'])) {
      switch ($_POST['action']) {
        case "lancerPartie":
          $game->lancerDe();
        default:
          break;
      }
    } ?></button>
</form>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="">id</label>
    <input type="text" name="idUser">
    <label for="">login</label>
    <input type="text" name="login">
    <label for="">mdp</label>
    <input type="text" name="mdp">
    <label for="">droit</label>
    <input type="text" name="droit">


    <button>inscription</button>
  </form>
</body>

</html>