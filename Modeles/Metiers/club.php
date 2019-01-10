<?php
Class club
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $idClub; 
	private $nomClub; 
	private $adresseClub; 
	private $emailClub; 
	private $dateCreation; 
	private $resumeActiviteClub; 
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unIdClub, $unNomClub, $uneAdresseClub, $unEmailClub, $uneDateCreation, $unResumeClub)
		{
		$this->idClub = $unIdClub;
		$this->nomClub = $unNomClub;
		$this->adresseClub = $uneAdresseClub;
		$this->emailClub = $unEmailClub;
		$this->dateCreation = $uneDateCreation;
		$this->resumeActiviteClub = $unResumeClub;
		}
	
	//ACCESSEURS-------------------------------------------------------------------------------
	public function getIdClub()
		{
		return $this->idClub;
		}
		
	public function getNomClub()
		{
		return $this->nomClub;
		}
	public function getAdresseClub()
		{
		return $this->adresseClub;
		}
	public function getEmailClub()
		{
		return $this->emailClub;
		}
	public function getDateCreationClub()
		{
		return $this->dateCreation;
		}
	public function getResumeActiviteClub()
		{
		return $this->resumeActiviteClub;
		}
	//SETTEUR------------------------------------------------------------
	
	public function setIdClub($unIdClub)
		{
		$this->idClub = $unIdClub;
		}
	public function setNomClub($unNomClub)
		{
		$this->nomClub = $unNomClub;
		}
	public function setAdresseClub($uneAdresseClub)
		{
		$this->adresseClub = $uneAdresseClub;
		}
	public function setDateCreationClub($uneDateCreationClub)
		{
		$this->dateCreationClub = $uneDateCreationClub;
		}
	public function setEmailClub($unEmailClub)
		{
		$this->emailClub = $unEmailClub;
		}
	public function setResumeActiviteClub($unResumeActiviteClub)
		{
		$this->ResumeClub = $unResumeActiviteClub;
		}
	}
	
?>