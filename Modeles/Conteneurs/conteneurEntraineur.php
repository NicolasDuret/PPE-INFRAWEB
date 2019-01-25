<?php
include $path.'/Modeles/Metiers/entraineur.php';

Class conteneurEntraineur
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesEntraineurs;
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesEntraineurs = new arrayObject();
		}
	
	//METHODE AJOUTANT UN Entraineur------------------------------------------------------------------------------
	public function ajouteUnEntraineur($unIdEntraineur, $unNomEntraineur, $unPrenomEntraineur)
		{
		$unEntraineur = new Entraineur($unIdEntraineur, $unNomEntraineur, $unPrenomEntraineur);
		$this->lesEntraineurs->append($unEntraineur);
			
		}
		
	//METHODE RETOURNANT LE NOMBRE DE Entraineur-------------------------------------------------------------------------------
	public function nbEntraineurs()
		{
		return $this->lesEntraineurs->count();
		}	
		
	//METHODE RETOURNANT LA LISTE DES EntraineurS-----------------------------------------------------------------------------------------
	public function listeDesEntraineurs()
		{
		$liste = '';
		foreach ($this->lesEntraineurs as $unEntraineur)
			{		
				$liste = $liste.'Entraineur : "'.$unEntraineur->getNomEntraineur().' à pour Prenom :'.$unEntraineur->getPrenomEntraineur().'><br>';
			}
		return $liste;
		}
		
		//METHODE RETOURNANT LA LISTE DES EntraineurS DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesEntraineursAuFormatHTML()
		{
		$liste = "<SELECT name = 'idEntraineur'>";
		foreach ($this->lesEntraineurs as $unEntraineur)
			{
			$liste = $liste."<OPTION value='".$unEntraineur->getIdEntraineur()."'>".$unEntraineur->getNomEntraineur()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}		

//METHODE RETOURNANT UNE LANGUE A PARTIR DE SON NUMERO--------------------------------------------	
	public function donneObjetEntraineurDepuisNumero($unIdEntraineur)
		{
		//initialisation d'un booléen (on part de l'hypothèse que l'entraineur n'existe pas)
		$trouve=false;
		$leBonEntraineur=null;
		//création d'un itérateur sur la collection lesEntraineurs
		$iEntraineur = $this->lesEntraineurs->getIterator();
		//TQ on a pas trouvé l'entraineur et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iEntraineur->valid()))
			{
			//SI le numéro de l'entraieneur courant correspond au numéro passé en paramètre
			if ($iEntraineur->current()->getIdEntraineur()==$unIdEntraineur)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde de l'entraineur courant
				$leBonEntraineur = $iEntraineur->current();
				
				}
			//SINON on passe à l'entraineur suivante
			else
				$iEntraineur->next();
			}
		return $leBonEntraineur;
		}		
	
	}
	
?> 