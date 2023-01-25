<?php 



class Joueur extends Utilisateur{
    use Hydrate;
    public $partie;


    public function __construct( array $params) {
        $this->hydrate($params);
    }





    public function lancerPartie():void{
       // if(){ }
    }

    /**
     * Get the value of partie
     */ 
    public function getPartie()
    {
        return $this->partie;
    }

    /**
     * Set the value of partie
     *
     * @return  self
     */ 
    public function setPartie($partie)
    {
        $this->partie = $partie;

        return $this;
    }
}