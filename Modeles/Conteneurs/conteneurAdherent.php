<?php
include $path.'/Modeles/Metiers/adherent.php';

Class conteneurAdherent
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesAdherents;
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesAdherents = new arrayObject();
		}
	
	//METHODE AJOUTANT UN Adherent------------------------------------------------------------------------------
	public function ajouteUnAdherent($unIdEntraineur, $unNomEntraineur, $unPrenomEntraineur, $ageAdherent, $sexeAdherent, $equipeAdherent)
		{
		$unAdherent = new adherent($unIdEntraineur, $unNomEntraineur, $unPrenomEntraineur, $ageAdherent, $sexeAdherent, $equipeAdherent);
		$this->lesAdherents->append($unAdherent);
			
		}
		
	//METHODE RETOURNANT LE NOMBRE D' adherents-------------------------------------------------------------------------------
	public function nbAdherent()
		{
		return $this->lesAdherents->count();
		}	
		
	//METHODE RETOURNANT LA LISTE DES Adherents-----------------------------------------------------------------------------------------
	public function listeDesAdherents()
		{
		$liste = '';
		foreach ($this->lesAdherents as $unAdherent)
			{	$uneEquipe=$unAdherent->getSonEquipe();
				$liste = $liste.'Adherent : "'.$unAdherent->getNomAdherent().' à pour Equipe :'.$uneEquipe->getNomEquipe().'><br>';
			}
		return $liste;
		}
		
		//METHODE RETOURNANT LA LISTE DES adherents DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesAdherentsAuFormatHTML()
		{
		$liste = "<SELECT name = 'idAdherent'>";
		foreach ($this->lesAdherents as $unAdherent)
			{
			$liste = $liste."<OPTION value='".$unAdherent->getIdAdherent()."'>".$unAdherent->getNomAdherent()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}		

//METHODE RETOURNANT UN adherent A PARTIR DE SON NUMERO--------------------------------------------	
	public function donneObjetAdherentDepuisNumero($unIdAdherent)
		{
		//initialisation d'un booléen (on part de l'hypothèse que l'adherent n'existe pas)
		$trouve=false;
		$leBonAdherent=null;
		//création d'un itérateur sur la collection lesAdherents
		$iAdherent = $this->lesAdherents->getIterator();
		//TQ on a pas trouvé l'adherent et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iAdherent->valid()))
			{
			//SI le numéro de l'adherent courant correspond au numéro passé en paramètre
			if ($iAdherent->current()->getIdAdherent()==$unIdAdherent)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde de l'adherent courant
				$leBonAdherent = $iAdherent->current();
				
				}
			//SINON on passe à l'adherent suivant
			else
				$iAdherent->next();
			}
		return $leBonAdherent;
		}		
	
	}
	
?> 