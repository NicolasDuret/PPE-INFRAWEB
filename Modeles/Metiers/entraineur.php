<?php
Class entraineur
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $idEntraineur; 
	private $nomEntraineur; 
	private $prenomEntraineur; 
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unIdEntraineur, $unNomEntraineur, $unePrenomEntraineur)
		{
		$this->idEntraineur = $unIdEntraineur;
		$this->nomEntraineur = $unNomEntraineur;
		$this->prenomEntraineur = $unePrenomEntraineur;
		
		}
	
	//ACCESSEURS-------------------------------------------------------------------------------
	public function getIdEntraineur()
		{
		return $this->idEntraineur;
		}
		
	public function getNomEntraineur()
		{
		return $this->nomEntraineur;
		}
	public function getPrenomEntraineur()
		{
		return $this->prenomEntraineur;
		}
	
	//SETTEUR------------------------------------------------------------
	
	public function setIdEntraineur($unIdEntraineur)
		{
		$this->idEntraineur = $unIdEntraineur;
		}
	public function setNomEntraineur($unNomEntraineur)
		{
		$this->nomEntraineur = $unNomEntraineur;
		}
	public function setPrenomEntraineur($unPrenomEntraineur)
		{
		$this->prenomEntraineur = $unPrenomEntraineur;
		}
	
	}
	
?>