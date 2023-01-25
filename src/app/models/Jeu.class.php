<?php 



abstract class Jeu{

    use Hydrate;
    
    public $regles;
    

    
    
    public function __construct(array $params) {
        $this->hydrate($params);
    }
    
/**
public function afficheClassement():array{

}

public function top3():int{

}
*/


    /**
     * Set the value of regles
     *
     * @return  self
     */ 
    public function setRegles($regles)
    {
        $this->regles = $regles;

        return $this;
    }

    /**
     * Get the value of regles
     */ 
    public function getRegles()
    {
        return $this->regles;
    }
}