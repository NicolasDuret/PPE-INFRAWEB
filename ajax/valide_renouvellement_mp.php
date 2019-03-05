
<?php
session_start();
include '../Modeles/accesBD.php';
$errors         = array();
$data 			= array();
$data['success']=false;
$supp=true;

$tab=array();
$maBD = new accesBD();
$tab['id']=$_POST['id'];
$tab['mp1']=$_POST['mp1'];
$tab['mp2']=$_POST['mp2'];

$requete='select * from user where login="'.$tab['id'].'";';
$result=$maBD->getconn() ->query($requete);

if ($result)

{
	if ($result-> rowCount()==1)
	{
		$donnees = $result->fetch(PDO::FETCH_OBJ);
		$id=$donnees->id;
		$requete='select *,DATE_ADD(date, interval 1 DAY)>now() as valid from token where id_login="'.$id.'" and jeton="'.$_SESSION['token'].'";';
		$result1=$maBD->getconn() ->query($requete);
		if ($result1)
		{
			if ($result1-> rowCount()==1)
			{
				$donnees = $result1->fetch(PDO::FETCH_OBJ);
				$valid=$donnees->valid;
				if($valid==0)
				{
					$errors['message']='Votre jeton n\'est plus valide !';
				}
				else
				{
					if($tab['mp1']==$tab['mp2'])
					{
					$requete='update user set pass = md5("'.$tab['mp1'].'") where id="'.$id.'";';
					$result1=$maBD->getconn() ->query($requete);
					$data['success']=true;
					}
					else{
						$errors['message']='Mots de passe ne sont pas identiques !';
						$supp=false;
					}
				}

			}
			else {
				$errors['message']='Votre jeton n\'est pas valide !';
			}
			if($supp)
			{
				$requete='delete from token where id_login="'.$id.'";';
				$result1=$maBD->getconn() ->query($requete);
			}
		}
		else {
			$errors['message']='Identifiant & token invalide !';
		}
		
	
	}
	else {
		$errors['message']='Identifiant invalide !';
	}
}


if ( ! empty($errors)) {
	$data['success'] = false;
	$data['errors']  = $errors;
} else {
	if($data['success'])
	{
		$data['message'] = "Votre mot de passe a bien été modifié !";

	}
}
echo json_encode($data);
?>
