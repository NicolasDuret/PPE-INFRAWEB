<?php
Class equipe
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $id‪Equipe; 
	private $nomEquipe; 
	private $nbrPlaceEquipe; 
	private $ageMinEquipe; 
	private $ageMaxEquipe; 
	private $sexeEquipe; 
	private $leClubDeLEpique;
	private $leJourEntrainementEquipe;
	private $laRessourceDeLEquipe;
	private $lEntraineurDeLEpique;
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unId‪Equipe, $unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe, $unSexeEquipe, $unClubDeLEquipe, $unJourEntrainementEquipe, $uneRessourceDeLEquipe,$unEntraineurDeLEquipe)
		{
		$this->id‪Equipe = $unId‪Equipe;
		$this->nomEquipe = $unNomEquipe;
		$this->nbrPlaceEquipe = $unNbrPlaceEquipe;
		$this->ageMinEquipe = $unAgeMinEquipe;
		$this->ageMaxEquipe = $unAgeMaxEquipe;
		$this->sexeEquipe = $unSexeEquipe;
		$this->leClubDeLEquipe = $unClubDeLEquipe;
		$this->leJourEntrainementEquipe = $unJourEntrainementEquipe;
		$this->laRessourceDeLEquipe = $uneRessourceDeLEquipe;
		$this->lEntraineurDeLEquipe = $unEntraineurDeLEquipe;
		
		}
	
	//ACCESSEURS-------------------------------------------------------------------------------
	public function getId‪Equipe()
		{
		return $this->id‪Equipe;
		}
		
	public function getNomEquipe()
		{
		return $this->nomEquipe;
		}
	public function getNbrPlaceEquipe()
		{
		return $this->nbrPlaceEquipe;
		}
	public function getAgeMinEquipe()
		{
		return $this->ageMinEquipe;
		}
	public function getAgeMaxEquipeClub()
		{
		return $this->ageMaxEquipe;
		}
	public function getSexeEquipe()
		{
		return $this->sexeEquipe;
		}
	public function getClubDeLEquipe()
		{
			return $this->leClubDeLEquipe;
		}
	public function getJourEntrainementEquipe()
		{
			return $this->leJourEntrainementEquipe;
		}
	public function getRessourceDeLEquipe()
		{
			return $this->laRessourceDeLEquipe;
		}
	public function getEntraineurDeLEquipe()
		{
			return $this->lEntraineurDeLEquipe; 
		}
	//SETTEUR------------------------------------------------------------
	
	public function setId‪Equipe($unId‪Equipe)
		{
		$this->id‪Equipe = $unId‪Equipe;
		}
	public function setNomEquipe($unNomEquipe)
		{
		$this->nomEquipe = $unNomEquipe;
		}
	public function setNbrPlaceEquipe($unNbrPlaceEquipe)
		{
		$this->nbrPlaceEquipe = $unNbrPlaceEquipe;
		}
	public function setAgeMaxEquipe($unAgeMaxEquipe)
		{
		$this->ageMaxEquipe = $unAgeMaxEquipe;
		}
	public function setAgeMinEquipe($unAgeMinEquipe)
		{
		$this->ageMinEquipe = $unAgeMinEquipe;
		}
	public function setSexeEquipe($unSexeEquipe)
		{
		$this->sexeEquipe = $unSexeEquipe;
		}
	}
	
?>