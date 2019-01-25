<?php
Class ressource
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $idRessource; 
	private $nomRessource; 
		
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unIdRessource, $unNomRessource)
		{
		$this->idRessource = $unIdRessource;
		$this->nomRessource = $unNomRessource;
		}
	
	//ACCESSEURS-------------------------------------------------------------------------------
	public function getIdRessource()
		{
		return $this->idRessource;
		}
		
	public function getNomRessource()
		{
		return $this->nomRessource;
		}
		
	//SETTEUR------------------------------------------------------------
	
	public function setIdRessource($unIdRessource)
		{
		$this->idRessource = $unIdRessource;
		}
	public function setNomRessource($unNomRessource)
		{
		$this->nomRessource = $unNomRessource;
		}

	
	}
	
?>