<?php
Class jourSemaine
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $idJourSemaine; 
	private $libelleJourSemaine; 
		
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unIdJourSemaine, $unLibelleJourSemaine)
		{
		$this->idJourSemaine = $unidJourSemaine;
		$this->libelleJourSemaine = $unLibelleJourSemaine;
		}
	
	//ACCESSEURS-------------------------------------------------------------------------------
	public function getIdJourSemaine()
		{
		return $this->idJourSemaine;
		}
		
	public function getLibelleJourSemaine()
		{
		return $this->libelleJourSemaine;
		}
		
	//SETTEUR------------------------------------------------------------
	
	public function setIdJourSemaine($unIdJourSemaine)
		{
		$this->idJourSemaine = $unIdJourSemaine;
		}
	public function setLibelleJourSemaine($unLibelleJourSemaine)
		{
		$this->libelleJourSemaine = $unLibelleJourSemaine;
		}

	
	}
	
?>