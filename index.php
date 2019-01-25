<?php
session_start();
//include du fichier CONTROLEUR
$path=$_SERVER['DOCUMENT_ROOT'].'/PPE_InfraWeb';
include 'Controleur.php';
//SI le controleur n'existe pas déjà, on l'instancie
if (!isset ($_SESSION['Controleur']))
{
$monControleur = new Controleur();
//$_SESSION['Controleur'] = serialize($monControleur);
}
else
{
//$monControleur = unserialize($_SESSION['Controleur']);
}
//affichage de l'ent�te
$monControleur->afficheEntete();

//affichage du menu
$monControleur->afficheMenu();
//SI on souhaite voir un vue particulière, on passe celle-ci en param�tre (elle est récupérée à travers la méthode GET)
if ((isset($_GET['vue']))&& (isset($_GET['action'])))
$monControleur->affichePage($_GET['action'],$_GET['vue']);
//affichage du pied de page
$monControleur->affichePiedPage();

if ((isset($_GET['vue']))&& (isset($_GET['action']))){echo "<script>$('#carouselExampleIndicators').removeClass('d-block').addClass('d-none');
</script>";$monControleur->affichePage($_GET['action'],$_GET['vue']);
}
else {echo "<script>$('#carouselExampleIndicators').removeClass('d-none').addClass('d-block');
</script>";}

?>,