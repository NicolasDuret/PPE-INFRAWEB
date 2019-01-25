<?php
include $path.'/Modeles/Metiers/equipe.php';

Class conteneurEquipe
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesEquipes;
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesEquipes = new arrayObject();
		}
	
	//METHODE AJOUTANT UNE Equipe------------------------------------------------------------------------------
	public function ajouteUneEquipe($unIdEquipe, $unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe, $unSexeEquipe, $leClubDeLEquipe, $laRessourceEquipe, $leJourSemaineEquipe,$lEntraineurEquipe)
	{
		$uneEquipe = new equipe($unIdEquipe, $unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe, $unSexeEquipe, $leClubDeLEquipe, $laRessourceEquipe, $leJourSemaineEquipe,$lEntraineurEquipe);
		$this->lesEquipes->append($uneEquipe);
			
		}
		
	//METHODE RETOURNANT LE NOMBRE D' Equipes-------------------------------------------------------------------------------
	public function nbEquipe()
		{
		return $this->lesEquipes->count();
		}	
		
	//METHODE RETOURNANT LA LISTE DES Equipes-----------------------------------------------------------------------------------------
	public function listeDesEquipes()
		{
		$liste = '';
		foreach ($this->lesEquipes as $uneEquipe)
			{	$sonClub=$uneEquipe->getClubDeLEquipe();
			    $sonEntraineur = $UneEquipe->getEntraineurDeLEquipe();
				$saRessource = $uneEquipe->getRessourceDeLEquipe();
				$sonJourSemaine = $uneEquipe->getJourEntrainementEquipe();
				$liste = $liste.'Equipe : '.$unEquipe->getNomEquipe().' à pour Entraineur :'.$sonEntraineur->getNomEntraineur().' ils s entrainent le  :'.$sonJourSemaine->getLibelleJourSemaine().' a l endroit ci-nommé  :'.$saRessource->getNomRessource().'><br>';
			}
		return $liste;
		}
		
		//METHODE RETOURNANT LA LISTE DES Equipes DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesEquipesAuFormatHTML()
		{
		$liste = "<SELECT name = 'idEquipe'>";
		foreach ($this->lesEquipes as $uneEquipe)
			{
			$liste = $liste."<OPTION value='".$uneEquipe->getIdEquipe()."'>".$uneEquipe->getNomEquipe()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}		

//METHODE RETOURNANT UNE Equipe A PARTIR DE SON NUMERO--------------------------------------------	
	public function donneObjetEquipeDepuisNumero($unIdEquipe)
		{
		//initialisation d'un booléen (on part de l'hypothèse que l'Equipe n'existe pas)
		$trouve=false;
		$laBonneEquipe=null;
		//création d'un itérateur sur la collection lesEquipes
		$iEquipe = $this->lesEquipes->getIterator();
		//TQ on a pas trouvé l'Equipe et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iEquipe->valid()))
			{
			//SI le numéro de l'Equipe courante correspond au numéro passé en paramètre
			if ($iEquipe->current()->getIdEquipe()==$unIdEquipe)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde de l'Equipe courante
				$laBonneEquipe = $iEquipe->current();
				
				}
			//SINON on passe à l'Equipe suivante
			else
				$iEquipe->next();
			}
		return $laBonneEquipe;
		}		
	
	}
	
?> 