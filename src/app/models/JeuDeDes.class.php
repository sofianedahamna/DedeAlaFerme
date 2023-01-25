<?php

abstract class JeuDeDes extends Jeu
{
    use Hydrate;
    protected  $nbDes;
    protected  $nbLancerDes;
    private $TableDeParLancer;


    public function __construct(array $params)
    {
        $this->TableDeParLancer = array();
        $this->hydrate($params);
    }


    public function jetDeDes()
    {

        $iteratorDes = 0;
        $arrayLancer = array();
        do {
            array_push($arrayLancer, rand(1, 6));

            $iteratorDes++;
        } while ($iteratorDes < $this->nbDes);
        array_push($this->TableDeParLancer, $arrayLancer);
    }
    //Compteur de lancé de Dés
    public function lancerDe()
    {
        while ($this->nbLancerDes > 0) {
            //var_dump($this->nbLancerDes);
            $this->jetDeDes();
            $this->nbLancerDes--;
        }
    }



    /**
     * @return mixed
     */
    public function getNbDes()
    {
        return $this->nbDes;
    }

    /**
     * @param mixed $nbDes 
     * @return self
     */
    public function setNbDes($nbDes): self
    {
        $this->nbDes = $nbDes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbLancerDes()
    {
        return $this->nbLancerDes;
    }

    /**
     * @param mixed $nbLancerDes 
     * @return self
     */
    public function setNbLancerDes($nbLancerDes): self
    {
        $this->nbLancerDes = $nbLancerDes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTableDeParLancer()
    {
        return $this->TableDeParLancer;
    }

    /**
     * @param mixed $TableDeParLancer 
     * @return self
     */
    public function setTableDeParLancer($TableDeParLancer): self
    {
        $this->TableDeParLancer = $TableDeParLancer;
        return $this;
    }
}
