<?php
session_start();
include '../Modeles/accesBD.php';
$errors         = array();
$data           = array();
$data['success']=false;




$tab=array();
$maBD = new accesBD();
$tab['id']=$_POST['id'];
$tab['mp']=$_POST['mp'];
$tab['categ']=$_POST['categ'];
$requete='select * from user where login="'.$tab['id'].'" and pass=MD5("'.$tab['mp'].'") and type='.$tab['categ'].';';
$result=$maBD->getconn() ->query($requete);

if ($result)

{
    if ($result-> rowCount()==1)
    {
        $_SESSION['id']=$tab['id'];
        $_SESSION['type']=$tab['categ'];
        $data['success']=true;
    }
    else {
        $errors['message']='Identifiant,mot de passe,catégorie invalide !';
    }
}


if ( ! empty($errors)) {
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    if($data['success'])
    {
        $data['message'] = "Vous êtes bien connecté  !";

    }
}
echo json_encode($data);
?>