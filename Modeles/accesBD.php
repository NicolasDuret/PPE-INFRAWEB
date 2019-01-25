<?php

class accesBD
	{
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//--------------------------ATTRIBUTS PRIVES--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private $hote;
	private $login;
	private $passwd;
	private $base;
	private $conn;
	
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//--------------------------CONSTRUCTEUR------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function __construct()
		{
		$this->hote="localhost";
		$this->login="ppe2";
		$this->passwd="ppe2";
		$this->base="ppe2mairie";
		$this->connexion();
		
		}
	
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-----------------------------CONNECTION A LA BASE---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function connexion()
	{
		try
        {
            $this->conn = new PDO("mysql:host=".$this->hote.";dbname=".$this->base.";charset=utf8", $this->login, $this->passwd);
            $this->boolConnexion = true;
        }
        catch(PDOException $e)
        {
            die("Connection à la base de données échouée".$e->getMessage());
        }
	}
	
	
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//----------------------------CHARGEMENT DES INFORMATIONS DE LA BASE--------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function chargement($uneTable)
		{
		$lesInfos=null;
		$nbTuples=0;
		$stringQuery="SELECT * FROM ";

		//définition de la requête SQL
		//On prépare la requete
		$stringQuery = $this->specialCase($stringQuery,$uneTable);
		$query = $this->conn->prepare($stringQuery);
		//POUR chaque tuple retourné par la requête SQL
		if($query->execute())
		{
			while($row = $query->fetch(PDO::FETCH_NUM))
			{
				$lesInfos[$nbTuples] = $row;
				$nbTuples++;
			}
		}
		else
		{
			die('Problème dans chargement : '.$query->errorCode());
		}

		//retour du tableau à deux dimension
		return $lesInfos;
	}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CREATION DE LA REQUETE D'INSERTION Club-------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function insertClub($unNomClub,$uneAdresseClub, $unEmailClub, $uneDateCreation, $unResumeActiviteClub)
		{
		//génération automatique de l'identifiant
		$sonId = $this->donneProchainIdentifiant("CLUB","idClub");

		$requete = $this->conn->prepare("INSERT INTO CLUB (idClub,nomClub,adresseClub, emailClub, dateCreation, resumeActiviteClub) VALUES (?,?,?,?,?,?)");
		//définition de la requête SQL
		$requete->bindValue(1,$sonId);
		$requete->bindValue(2,$unNomClub);
		$requete->bindValue(3,$uneAdresseClub);
		$requete->bindValue(4,$unEmailClub);
		$requete->bindValue(5,$uneDateCreation);
		$requete->bindValue(6,$unResumeActiviteClub);
		//exécution de la requête SQL
		if(!$requete->execute())
		{
			die("Erreur dans insertClub : ".$requete->errorCode());
		}

		//retour de l'identifiant du nouveau tuple
		return $sonId;
		}
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CREATION DE LA REQUETE D'INSERTION JOUR SEMAINE------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function insertJourSemaine($unLibelleJourSemaine)
		{
		//génération automatique de l'identifiant
		$sonId = $this->donneProchainIdentifiant("jourSemaine","idJourSemaine");
		
		//définition de la requête SQL
		$requete = $this->conn->prepare("INSERT INTO jourSemaine (idJourSemaine,libelleJourSemaine) VALUES (?,?)");
		$requete->bindValue(1,$sonId);
		$requete->bindValue(2,$unLibelleJourSemaine);

		//exécution de la requête SQL
		if(!$requete->execute())
		{
			die("Erreur dans insertJourSemaine : ".$requete->errorCode());
		}

		//retour de l'identifiant du nouveau tuple
		return $sonId;
		}	
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CREATION DE LA REQUETE D'INSERTION ressource-------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function insertRessource($unNomRessource)
		{
		//génération automatique de l'identifiant
		$sonId = $this->donneProchainIdentifiant("ressource","idRessource");
		//définition de la requête SQL
		$requete = $this->conn->prepare("INSERT INTO ressource (idRessource,nomRessource) VALUES (?,?);");
		$requete->bindValue(1,$sonId);
		$requete->bindValue(2,$unNomRessource);

		//exécution de la requête SQL
		if(!$requete->execute())
		{
			die("Erreur dans insertRessource : ".$requete->errorCode());
		}

		//retour de l'identifiant du nouveau tuple
		return $sonId;
		}	
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CREATION DE LA REQUETE D'INSERTION entraineur ------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function insertEntraineur($unNomEntraineur, $unPrenomEntraineur)
		{
		//génération automatique de l'identifiant
		$sonId = $this->donneProchainIdentifiant("Entraineur","idEntraineur");
		//définition de la requête SQL
		$requete = $this->conn->prepare("INSERT INTO Entraineur (idEntraineur,nomEntraineur,prenomEntraineur) VALUES (?,?,?);");
		$requete->bindValue(1,$sonId);
		$requete->bindValue(2,$unNomEntraineur);
		$requete->bindValue(3,$unPrenomEntraineur);

		//exécution de la requête SQL
		if(!$requete->execute())
		{
			die("Erreur dans insertEntraineur : ".$requete->errorCode());
		}

		//retour de l'identifiant du nouveau tuple
		return $sonId;
		}	
		
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CREATION DE LA REQUETE D'INSERTION Adherent ------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function insertAdherent($unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent, $unIdEquipeAdherent)
		{
		//génération automatique de l'identifiant
		$sonId = $this->donneProchainIdentifiant("Adherent","idAdherent");
		//définition de la requête SQL
		$requete = $this->conn->prepare("INSERT INTO Entraineur (idAdherent,nomAdherent,prenomAdherent, ageAdherent, sexeAdherent, idEquipe) VALUES (?,?,?,?,?,?)");
		$requete->bindValue(1,$sonId);
		$requete->bindValue(2,$unNomAdherent);
		$requete->bindValue(3,$unPrenomAdherent);
		$requete->bindValue(4,$unAgeAdherent);
		$requete->bindValue(5,$unSexeAdherent);
		$requete->bindValue(6,$unIdEquipeAdherent);

		//exécution de la requête SQL
		if(!$requete->execute())
		{
			die("Erreur dans insertAdherent : ".$requete->errorCode());
		}

		//retour de l'identifiant du nouveau tuple
		return $sonId;
		}
		
			//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CREATION DE LA REQUETE D'INSERTION Equipe ------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function insertEquipe($unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe,$unSexeEquipe, $unJourSemaineEquipe, $uneRessourceEquipe, $unClubEquipe, $unEntraineurEquipe)
		{
		//génération automatique de l'identifiant
		$sonId = $this->donneProchainIdentifiant("Adherent","idAdherent");
		//définition de la requête SQL
		$requete = $this->conn->prepare("INSERT INTO Entraineur (idEquipe,nomEquipe,nbrPlaceEquipe, ageMinEquipe, AgeMaxEquipe, sexeEquipe, idJourSemaine, idRessouce, idClub, idEntraineur) VALUES (?,?,?,?,?,?,?,?,?,?);");
		$requete->bindValue(1,$sonId);
		$requete->bindValue(2,$unNomEquipe);
		$requete->bindValue(3,$unNbrPlaceEquipe);
		$requete->bindValue(4,$unAgeMinEquipe);
		$requete->bindValue(5,$unAgemaxEquipe);
		$requete->bindValue(6,$unSexeEquipe);
		$requete->bindValue(7,$unIdJourSemaineEquipe);
		$requete->bindValue(8,$uneRessourceEquipe);
		$requete->bindValue(9,$unClubEquipe);
		$requete->bindValue(10,$unEntraineurEquipe);


		if(!$requete->execute())
		{
			die("Erreur dans insertEquipe : ".$requete->errorCode());
		}

		//retour de l'identifiant du nouveau tuple
		return $sonId;
		}
		
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-----------------------------EXECUTION D'UNE REQUETE---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
		private function specialCase($stringQuery,$uneTable)
		{
			$uneTable = strtoupper($uneTable);
			switch ($uneTable) {
			case 'CLUB':
				$stringQuery.='CLUB';
				break;
			case 'RESSOURCE':
				$stringQuery.='RESSOURCE';
				break;
			case 'ADHERENT':
				$stringQuery.='ADHERENT';
				break;
			case 'ENTRAINEUR':
				$stringQuery.='ENTRAINEUR';
				break;
			case 'EQUIPE':
				$stringQuery.='EQUIPE';
				break;
			case 'JOURSEMAINE':	
				$stringQuery.='JOURSEMAINE';
				break;
			default:
				die('Pas une table valide');
				break;
			}

			return $stringQuery.";";
		}
	
	
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-----------------------------DONNE LE PROCHAIN INDENTIFIANT---------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function donneProchainIdentifiant($uneTable,$unIdentifiant)
		{
		//$prochainId[0]=0;
		//définition de la requête SQL
		$stringQuery = $this->specialCase("SELECT * FROM ",$uneTable);
		echo $stringQuery;
		$requete = $this->conn->prepare($stringQuery);
		$requete->bindValue(1,$unIdentifiant);

		//exécution de la requête SQL
		if($requete->execute())
		{
			$nbClub=0;
			//Retourne le prochain identifiant
			while($row = $requete->fetch(PDO::FETCH_NUM))
			{

				$nbClub = $row[0];
			}
			return $nbClub+1;
		}
		else
		{
			die('Erreur sur donneProchainIdentifiant : '+$requete->errorCode());
		}
		}
		
	}

?>