<?php

Class adherent
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $idAdherent;
	private $nomAdherent;
	private $prenomAdherent;
	private $ageAdherent;
	private $sexeAdherent;
	private $sonEquipeAdherent;
	
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unIdAdherent, $unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent, $lEquipeDeLAdherent)
		{
		$this->idAdherent = $unIdAdherent;
		$this->nomAdherent = $unNomAdherent;
		$this->prenomAdherent = $unPrenomAdherent;
		$this->ageAdherent = $unAgeAdherent;
		$this->sexeAdherent = $unSexeAdherent;
		$this->sonEquipeAdherent = $lEquipeDeLAdherent;
		}
	
	//ACCESSEURS-------------------------------------------------------------------------------
	public function getIdAdherent()
		{
		return $this->idAdherent;
		}
		
	public function getNomAdherent()
		{
		return $this->nomAdherent;
		}
	public function getPrenomAdherent()
		{
		return $this->prenomAdherent;
		}
	public function getAgeAdherent()
	{
		return $this->ageAdherent;
	}	
	public function getSexeAdherent()
	{
		return $this->sexeAdherent;
	}
	
	public function getSonEquipe()
	{
		return $this->sonEquipeAdherent;
	}
	
	
	}
	
?>