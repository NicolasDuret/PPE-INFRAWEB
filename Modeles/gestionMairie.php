<?php
include 'Conteneurs/conteneurClub.php';
include 'Conteneurs/conteneurEntraineur.php';
include 'Conteneurs/conteneurRessource.php';
include 'Conteneurs/conteneurJourSemaine.php';
include 'Conteneurs/conteneurAdherent.php';
include 'Conteneurs/conteneurEquipe.php';
include 'accesBD.php';

Class gestionMairie
	{
	//ATTRIBUTS PRIVES---------------------------------------------------------------------------------------------------------------------------
	private $toutesLesRessources;
	private $toutesLesEquipes;
	private $TousLesAdherents;
	private $tousLesEntraineurs;
	private $tousLesJoursSemaine;
	private $tousLesClubs;
	private $maBD;
	
	//CONSTRUCTEUR--------------------------------------------------------------------------------------------------------------------------------
	public function __construct()
		{
		$this->toutesLesEquipes = new conteneurEquipe();
		$this->toutesLesRessources = new conteneurRessource();
		$this->tousLesClubs = new conteneurClub();
		$this->tousLesAdherents = new conteneurAdherent();
		$this->tousLesJoursSemaine = new conteneurJourSemaine();
		$this->tousLesEntraineurs = new conteneurEntraineur();
		$this->maBD = new accesBD();
		$this->chargeLesClubs();	
		$this->chargeLesEquipes();
		$this->chargeLesRessources();
		$this->chargeLesJoursSemaine();
		$this->chargeLesAdherents();
		$this->chargeLesEntraineurs();
	
		}
	
		
	//METHODE CHARGEANT TOUTES LES CLUBS--------------------------------------------------------------------------------------
	private function chargeLesClubs()
		{
		$resultat=$this->maBD->chargement('club');
		$nb=0;
		while ($nb<sizeof($resultat))
			{
			//instanciation du club et ajout de celui-ci dans la collection
			$this->tousLesClubs->ajouteUnClub($resultat[$nb][0],$resultat[$nb][1],$resultat[$nb][2],$resultat[$nb][3],$resultat[$nb][4],$resultat[$nb][5]);
			$nb++;
			}
		}
	
	//METHODE CHARGEANT TOUS LES ADHERENTS-----------------------------------------------------------------------------------
	private function chargeLesAdherents()
		{
		$resultat=$this->maBD->chargement('adherent');
		$nb=0;
		while ($nb<sizeof($resultat))
			{
			$this->tousLesAdherents->ajouteUnAdherent($resultat[$nb][0],$resultat[$nb][1],$resultat[$nb][2],$resultat[$nb][3],$resultat[$nb][4],$resultat[$nb][5]);
			$nb++;
			}
			
		}
		//METHODE CHARGEANT TOUTES LES RESSOURCES-----------------------------------------------------------------------------------
	private function chargeLesRessources()
		{
		$resultat=$this->maBD->chargement('ressource');
		$nb=0;
		while ($nb<sizeof($resultat))
			{
			$this->toutesLesRessources->ajouteUneRessource($resultat[$nb][0],$resultat[$nb][1]);
			$nb++;
			}
		}
	//METHODE CHARGEANT TOUS LES JOURS SEMAINE-----------------------------------------------------------------------------------
	private function chargeLesJoursSemaine()
		{
		$resultat=$this->maBD->chargement('jourSemaine');
		$nb=0;
		while ($nb<sizeof($resultat))
			{
			$this->tousLesJoursSemaine->ajouteUnJourSemaine($resultat[$nb][0],$resultat[$nb][1]);
			$nb++;
			}
		}
			//METHODE CHARGEANT TOUS LES ENTRAINEURS-----------------------------------------------------------------------------------
	private function chargeLesEntraineurs()
		{
		$resultat=$this->maBD->chargement('entraineur');
		$nb=0;
	
		while ($nb<sizeof($resultat))
			{
				$this->tousLesEntraineurs->ajouteUnEntraineur($resultat[$nb][0],$resultat[$nb][1],$resultat[$nb][2]);
			$nb++;
			}
		}
//METHODE CHARGEANT TOUTES LES EQUIPES-----------------------------------------------------------------------------------
	private function chargeLesEquipes()
		{
		$resultat=$this->maBD->chargement('equipe');
		$nb=0;
	
		while ($nb<sizeof($resultat))
			{
				$this->toutesLesEquipes->ajouteUneEquipe($resultat[$nb][0],$resultat[$nb][1],$resultat[$nb][2],$resultat[$nb][3],$resultat[$nb][4],$resultat[$nb][5],$resultat[$nb][6],$resultat[$nb][7],$resultat[$nb][8],$resultat[$nb][9]);
			$nb++;
			}
		}
	//METHODE INSERANT UNE Equipe----------------------------------------------------------------------------------------------------------
	public function ajouteUneEquipe($unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe,$unSexeEquipe, $unJourSemaineEquipe, $uneRessourceEquipe, $unClubEquipe, $unEntraineurEquipe)
		{
		//insertion de l'equipe dans la base de données
		$sonNumero = $this->maBD->insertEquipe($unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe,$unSexeEquipe, $unJourSemaineEquipe, $uneRessourceEquipe, $unClubEquipe, $unEntraineurEquipe);
		//instanciation de l'equipe et ajout de celle-ci dans la collection
		$this->toutesLesEquipes->ajouteUneEquipe($sonNumero,$unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe,$unSexeEquipe, $unJourSemaineEquipe, $uneRessourceEquipe, $unClubEquipe, $unEntraineurEquipe);
		}
	//METHODE INSERANT UNE ressources----------------------------------------------------------------------------------------------------------
	public function ajouteUneressource($unNomRessource)
		{
		//insertion de la resource dans la base de données
		$sonNumero = $this->maBD->insertRessource($unNomRessource);
		//instanciation de la ressource et ajout de celle-ci dans la collection
		$this->toutesLesRessources->ajouteUneRessource($sonNumero,$unNomRessource);
		}
		//METHODE INSERANT UN JOURSEMAINE----------------------------------------------------------------------------------------------------------
	public function ajouteUnJourSemaine($unLibelleJourSemaine)
		{
		//insertion du jour de la semaine dans la base de données
		$sonNumero = $this->maBD->insertJourSemaine($unLibelleJourSemaine);
		//instanciation du jour de la semaine et ajout de celui-ci dans la collection
		$this->tousLesJoursSemaine->ajouteUnJourSemaine($sonNumero,$unLibelleJourSemaine);
		}
	//METHODE INSERANT UN ADHERENT--------------------------------------------------------------------------------------------------------
	public function ajouteUnAdherent($unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent, $unIdEquipeAdherent)
		{
		//insertion de l'adherent  dans la base de données
		$sonCode=$this->maBD->insertAdherent($unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent, $unIdEquipeAdherent);
		
		//instanciation de l'adherent et ajout de celle-ci dans la collection
		$this->tousLesAdherents->ajouteUnAdherent($sonNumero,$unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent, $unIdEquipeAdherent);
		}	
		
    //METHODE INSERANT UN ENTRAINEUR--------------------------------------------------------------------------------------------------------
	public function ajouteUnEntraineur($unNomEntraineur, $unPrenomEntraineur)
		{
		//insertion de l'adherent  dans la base de données
		$sonCode=$this->maBD->insertEntraineur($unNomEntraineur, $unPrenomEntraineur);
		
		//instanciation de l'entraineur et ajout de celle-ci dans la collection
		$this->tousLesEntraineurs->ajouteUnEntraineur($sonNumero,$unNomEntraineur, $unPrenomEntraineur);
		}	
	//METHODE INSERANT UN CLUB --------------------------------------------------------------------------------------------------------
	public function ajouteUnClub($unNomClub,$uneAdresseClub, $unEmailClub, $uneDateCreation, $unResumeActiviteClub)
		{
		//insertion d'un club  dans la base de données
		$sonCode=$this->maBD->insertClub($unNomClub,$uneAdresseClub, $unEmailClub, $uneDateCreation, $unResumeActiviteClub);
		
		//instanciation du club et ajout de celle-ci dans la collection
		$this->tousLesClubs->ajouteUnClub($sonCode,$unNomClub,$uneAdresseClub, $unEmailClub, $uneDateCreation, $unResumeActiviteClub);
		}	
	//METHODE RETOURNANT LE NOMBRE DE CLUB------------------------------------------------------------------------------------------------
	public function donneNbClubs()
		{
		return $this->tousLesClubs->nbClubs();
		}

	//METHODE RETOURNANT LE NOMBRE DE Ressources----------------------------------------------------------------------------------------------
	public function donneNbRessources()
		{
		return $this->toutesLesRessources->nbRessources();
		}
	public function donneNbEquipes()
		{
		return $this->toutesLesEquipes->nbEquipe();
		}		
	public function donneNbEntraineurs()
		{
		return $this->tousLesEntraineurs->nbEntraineur();
		}
	public function donneNbAdherents()
		{
		return $this->tousLesAdherents->nbAdherent();
		}		
	public function donneNbJoursSemaine()
		{
		return $this->tousLesJoursSemaine->nbJourSemaine();
		}
	//METHODE RETOURNANT LA LISTE DES differents elements-------------------------------------------------------------------------------------------------------
	public function listeLesEquipes()
		{
		return $this->toutesLesEquipes->listeDesEquipes();
		}
	public function listeLesEntraineurs()
		{
		return $this->tousLesEntraineurs->listeDesEntraineurs();
		}
	public function listeLesRessources()
		{
		return $this->toutesLesRessources->listeDesRessources();
		}
	public function listeLesJoursSemaine()
		{
		return $this->tousLesJoursSemaine->listeDesJoursSemaine();
		}
	public function listeLesClubs()
		{
		return $this->tousLesClubs->listeLesClubs();
		}
	public function listeLesAdherents()
		{
		return $this->tousLesAdherents->listeDesAdherents();
		}
			
			
	//METHODE RETOURNANT LA LISTE DES DIFFERENTS ELEMENTS DANS DES BALISES <SELECT>-----------------------------------------------------------------
	public function lesAdherentsAuFormatHTML()
		{
		return $this->tousLesAdherents->lesAdherentsAuFormatHTML();
		}
	public function lesRessourcesAuFormatHTML()
		{
		return $this->toutesLesRessources->lesRessourcesAuFormatHTML();
		}	
	public function lesEquipesAuFormatHTML()
		{
		return $this->toutesLesEquipes->lesEquipesAuFormatHTML();
		}	
	public function lesClubsAuFormatHTML()
		{
		return $this->tousLesClubs->lesClubsAuFormatHTML();
		}	
	public function lesJoursSemaineAuFormatHTML()
		{
		return $this->tousLesJoursSemaine->lesJoursSemaineAuFormatHTML();
		}	
	public function lesEntraineursAuFormatHTML()
		{
		return $this->tousLesEntraineurs->lesEntraineursAuFormatHTML();
		}			
	//METHODE RETOURNANT LES DETAILS D'UN ELEMENT----------------------------------------------------------------------------------------------------
	/*public function donneDetails($unNumeroGuide)
		{
		  $retour=$this->tousLesGuides->donneToutesLeslanguesDUnGuide($unNumeroGuide);
		  return $retour;
		}*/
		
	}
	
?>