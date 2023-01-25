<?php


spl_autoload_register(function($classe){
    if (file_exists("src/app/models/$classe.class.php"))
         require_once "src/app/models/$classe.class.php";

    if (file_exists("src/app/models/$classe.trait.php"))
         require_once "src/app/models/$classe.trait.php";
  });
  