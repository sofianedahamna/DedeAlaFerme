<?php



class Utilisateur
{
	use Hydrate;

	private $idUser;
	protected $login;
	private  $mdp;
	private $droit;




	public function __construct(array $params)
	{
		$this->hydrate($params);
	}

	/** 
    public function connecter():bool
    {
    }*/
	/**
	 * Summary of connecter
	 * @return bool
	 */
	/** 
    public function deconnecter():bool
    {
    }*/
	/**
	 * Summary of deconnecter
	 * @return bool
	 */
	/** public function inscriptions():User
    {
        if(){
            
        }
    } 
	 */
	/**
	 * Summary of inscriptions
	 * @return user
	 */

	/**
	 * @return mixed
	 */
	public function getIdUser()
	{
		return $this->idUser;
	}

	/**
	 * @param mixed $idUser 
	 * @return self
	 */
	public function setIdUser($idUser): self
	{
		$this->idUser = $idUser;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLogin()
	{
		return $this->login;
	}

	/**
	 * @param mixed $login 
	 * @return self
	 */
	public function setLogin($login): self
	{
		$this->login = $login;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMdp()
	{
		return $this->mdp;
	}

	/**
	 * @param mixed $mdp 
	 * @return self
	 */
	public function setMdp($mdp): self
	{
		$this->mdp = $mdp;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDroit()
	{
		return $this->droit;
	}

	/**
	 * @param mixed $droit 
	 * @return self
	 */
	public function setDroit($droit): self
	{
		$this->droit = $droit;
		return $this;
	}
}
