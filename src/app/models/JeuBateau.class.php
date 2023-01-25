<?php
use JeuDeDes;

class JeuBateau extends JeuDeDes{
    use Hydrate;
	const capitaine = 6;
    private  $capitaine;
    private $equipage;
    private  $bateau;
    private $equipageComplet;
	public $partie;


    public function __construct(array $params) {
        $this->hydrate($params); 
    }

  






	/**
	 * @return mixed
	 */
	public function getCapitaine() {
		return $this->capitaine;
	}
	
	/**
	 * @param mixed $capitaine 
	 * @return self
	 */
	public function setCapitaine($capitaine): self {
		$this->capitaine = $capitaine;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBateau() {
		return $this->bateau;
	}
	
	/**
	 * @param mixed $bateau 
	 * @return self
	 */
	public function setBateau($bateau): self {
		$this->bateau = $bateau;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEquipageComplet() {
		return $this->equipageComplet;
	}

	/**
	 * @param mixed $equipageComplet 
	 * @return self
	 */
	public function setEquipageComplet($equipageComplet): self {
		$this->equipageComplet = $equipageComplet;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEquipage() {
		return $this->equipage;
	}

	/**
	 * @param mixed $equipage 
	 * @return self
	 */
	public function setEquipage($equipage): self {
		$this->equipage = $equipage;
		return $this;
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