<?php
include $path.'/Modeles/Metiers/jourSemaine.php';

Class conteneurJourSemaine
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesJoursSemaine;
	
	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesJoursSemaine = new arrayObject();
		}
	
	//METHODE AJOUTANT UNE Ressource------------------------------------------------------------------------------
	public function ajouteUnJourSemaine($unIdJourSemaine, $unLibelleJourSemaine)
		{
		$unJourSemaine = new ressource($unIdJourSemaine, $unLibelleJourSemaine);
		$this->lesJoursSemaine->append($unJourSemaine);
			
		}
		
	//METHODE RETOURNANT LE NOMBRE DE Jour dans la semaine-------------------------------------------------------------------------------
	public function nbJourSemaine()
		{
		return $this->lesJoursSemaine->count();
		}	
		
	//METHODE RETOURNANT LA LISTE DES JOURS SEMAINE-----------------------------------------------------------------------------------------
	public function listeDesJoursSemaine() {
		$liste ='<div class="table-responsive">
	<table id="tabjoursemaine" class="table table-striped table-bordered" cellspacing="0">
		<thead>
			<tr>
			<td>Lundi</td>
			<td>Mardi</td>
			<td>Mercredi</td>
			<td>Jeudi</td>
			<td>Vendredi</td>
			</tr>
		</thead>
	<tbody>';
		foreach ($this->lesClubs as $unClub){
			$liste = $liste.'
	<tr>
		<td>'.$unClub->getLundi().'</td>
		<td>'.$unClub->getMardi().'</td>
		<td>'.$unClub->getMercredi().'</td>
		<td>'.$unClub->getJeudi().'</td>
		<td>'.$unClub->getVendredi().'</td>
	</tr>';
		}
$liste = $liste.'
	</tbody>
	</table>';
return $liste;
}
		
		//METHODE RETOURNANT LA LISTE DES jours de la semaine DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesJoursSemaineAuFormatHTML()
		{
		$liste = "<SELECT name = 'idJourSemaine'>";
		foreach ($this->lesJoursSemaine as $unJourSemaine)
			{
			$liste = $liste."<OPTION value='".$unJourSemaine->getIdJourSemaine()."'>".$unJourSemaine->getLibelleJourSemaine()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}	

//METHODE RETOURNANT UNE LANGUE A PARTIR DE SON NUMERO--------------------------------------------	
	public function donneObjetJourSemaineDepuisNumero($unIdJourSemaine)
		{
		//initialisation d'un booléen (on part de l'hypothèse que le jour de la semaine n'existe pas)
		$trouve=false;
		$leBonJour=null;
		//création d'un itérateur sur la collection lesJoursSemaine
		$iJour = $this->lesJoursSemaine->getIterator();
		//TQ on a pas trouvé le jour de la semaine et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iJour->valid()))
			{
			//SI le numéro du jour de la semaine courant correspond au numéro passé en paramètre
			if ($iJour->current()->getIdJourSemaine()==$unIdJourSemaine)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde du jour de la semaine courant
				$leBonJour = $iJour->current();
				
				}
			//SINON on passe au jour de la semaine suivant
			else
				$iJour->next();
			}
		return $lebonJour;
		}		
	
	}
	
?> 