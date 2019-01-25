<?php
include $path.'/Modeles/Metiers/ressource.php';

Class conteneurRessource
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesRessources;
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesRessources = new arrayObject();
		}
	
	//METHODE AJOUTANT UNE Ressource------------------------------------------------------------------------------
	public function ajouteUneRessource($unIdRessource, $unNomRessource)
		{
		$uneRessource = new ressource($unIdRessource, $unNomRessource);
		$this->lesRessources->append($uneRessource);
			
		}
		
	//METHODE RETOURNANT LE NOMBRE DE Ressource-------------------------------------------------------------------------------
	public function nbRessources()
		{
		return $this->lesRessources->count();
		}	
		
	//METHODE RETOURNANT LA LISTE DES Ressources-----------------------------------------------------------------------------------------
	public function listeDesRessources()
		{
		$liste = '';
		foreach ($this->lesRessources as $uneRessource)
			{		
				$liste = $liste.'Ressource : '.$uneRessource->getNomRessource().'<br>';
			}
		return $liste;
		}
		
		//METHODE RETOURNANT LA LISTE DES Ressources DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesRessourcesAuFormatHTML()
		{
		$liste = "<SELECT name = 'idRessource'>";
		foreach ($this->lesRessources as $uneRessource)
			{
			$liste = $liste."<OPTION value='".$uneRessource->getIdRessource()."'>".$uneRessource->getNomRessource()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}		

//METHODE RETOURNANT UNE LANGUE A PARTIR DE SON NUMERO--------------------------------------------	
	public function donneObjetRessourceDepuisNumero($unIdRessource)
		{
		//initialisation d'un booléen (on part de l'hypothèse que la ressource n'existe pas)
		$trouve=false;
		$laBonneRessource=null;
		//création d'un itérateur sur la collection lesRessources
		$iRessource = $this->lesRessources->getIterator();
		//TQ on a pas trouvé la ressource et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iRessource->valid()))
			{
			//SI le numéro de la ressource courante correspond au numéro passé en paramètre
			if ($iRessource->current()->getIdRessource()==$unIdRessource)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde de la ressource courante
				$laBonneRessource = $iRessource->current();
				
				}
			//SINON on passe à la ressource suivante
			else
				$iRessource->next();
			}
		return $laBonneRessource;
		}		
	
	}
	
?> 