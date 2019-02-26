<?php

include ($path.'/Modeles/Metiers/club.php');

Class conteneurClub
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesClubs;
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesClubs = new arrayObject();
		}
	
	//METHODE AJOUTANT UN CLUB------------------------------------------------------------------------------
	public function ajouteUnClub($unIdClub, $unNomClub, $unAdresseClub, $unEmailClub, $uneDateCreationClub, $unResumeActiviteClub)
		{
		$unClub = new club($unIdClub, $unNomClub, $unAdresseClub, $unEmailClub, $uneDateCreationClub, $unResumeActiviteClub);
		$this->lesClubs->append($unClub);
			
		}
		
	//METHODE RETOURNANT LE NOMBRE DE CLUB-------------------------------------------------------------------------------
	public function nbClubs()
		{
		return $this->lesClubs->count();
		}	
		
	//METHODE RETOURNANT LA LISTE DES CLUBS-----------------------------------------------------------------------------------------
	public function listeLesClubs(){
		$liste ='<div class="table-responsive">
	<table id="tabClub" class="table table-striped table-bordered" cellspacing="0">
		<thead>
			<tr>
			<td>Nom</td>
			<td>Adresse</td>
			<td>Email</td>
			<td>RésmuméActivité</td>
			</tr>
		</thead>
	<tbody>';
		foreach ($this->lesClubs as $unClub){
			$liste = $liste.'
	<tr>
		<td>'.$unClub->getNomClub().'</td>
		<td>'.$unClub->getAdresseClub().'</td>
		<td>'.$unClub->getEmailClub().'</td>
		<td>'.$unClub->getResumeActiviteClub().'</td>
	</tr>';
		}
		$liste = $liste.'
	</tbody>
	</table>';
		return $liste;
	}
		//METHODE RETOURNANT LA LISTE DES CLUBS DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesClubsAuFormatHTML()
		{
		$liste = "<SELECT name = 'idClub'>";
		foreach ($this->lesClubs as $unClub)
			{
			$liste = $liste."<OPTION value='".$unClub->getIdClub()."'>".$unClub->getNomClub()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}		

//METHODE RETOURNANT UNE LANGUE A PARTIR DE SON NUMERO--------------------------------------------	
	public function donneObjetClubDepuisNumero($unIdClub)
		{
		//initialisation d'un booléen (on part de l'hypothèse que le club n'existe pas)
		$trouve=false;
		$leBonClub=null;
		//création d'un itérateur sur la collection lesClubs
		$iClub = $this->lesClubs->getIterator();
		//TQ on a pas trouvé le club et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iClub->valid()))
			{
			//SI le numéro du club courant correspond au numéro passé en paramètre
			if ($iClub->current()->getIdClub()==$unIdClub)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde du club courant
				$leBonClub = $iClub->current();
				
				}
			//SINON on passe au club suivant
			else
				$iClub->next();
			}
		return $leBonClub;
		}		
	
	}
	
?> 