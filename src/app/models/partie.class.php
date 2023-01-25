<?php 



class Partie {
    use Hydrate;
    private $dateHeure;
    private  $score;
    private  $gagner;
	public Joueur $joueur;
	public JeuBateau $jeuBateau;





    public function __construct(array $params) {
        $this->hydrate($params);
    }




	/**
	 * @return mixed
	 */
	public function getScore() {
		return $this->score;
	}
	
	/**
	 * @param mixed $score 
	 * @return self
	 */
	public function setScore($score): self {
		$this->score = $score;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGagner() {
		return $this->gagner;
	}
	
	/**
	 * @param mixed $gagner 
	 * @return self
	 */
	public function setGagner($gagner): self {
		$this->gagner = $gagner;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDateHeure() {
		return $this->dateHeure;
	}

	/**
	 * @param mixed $dateHeure 
	 * @return self
	 */
	public function setDateHeure($dateHeure): self {
		$this->dateHeure = $dateHeure;
		return $this;
	}
}