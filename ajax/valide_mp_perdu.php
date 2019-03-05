<?php

session_start();
include '../Modeles/accesBD.php';
$errors         = array();
$data           = array();
$data['success']=false;
$tab=array();
$maBD = new accesBD();
$tab['id']=$_POST['id'];
$token = md5(time() . mt_rand());
$requete='select * from user where login="'.$tab['id'].'";';
$result=$maBD->getconn() ->query($requete);

if ($result)

{
    if ($result-> rowCount()==1)
    {
        $donnees = $result->fetch(PDO::FETCH_OBJ);
        $id=$donnees->id;
        $token = md5(time().mt_rand().$tab['id']);
        include_once  'class.phpmailer.php';
        include_once 'class.smtp.php';
        $message = '<html><body>';
        $message .= '</br>La mairie d\'AUSSONNE vous adresse ce message suite à une demande de modification de mot de passe pour : '.$tab['id'].' ';
        $message .= '</br> Nous vous prions de clicker sur le lien suivant http://localhost/PPE2_EPSI_Trav/index.php?vue=motdepasse&action=renouvellement&token='.$token;
        $message .='</body></html>';
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            $mail->CharSet = 'UTF-8';
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            //$mail->Host = '127.0.0.1';  // Specify main and backup SMTP servers
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'projets.ppe@gmail.com';                 // SMTP username
            $mail->Password = 'projetPPE';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('projets.ppe@gmail.com');
            //$mail->addAddress($tab['id'], 'AUSSONNE-ID');     // Add a recipient
            $mail->addAddress('projets.ppe@gmail.com', 'AUSSONNE-ID');     // Add a recipient
            //$mail->addReplyTo($_POST['mail']);
            //$mail->addCC($_POST['mail']);
            //$mail->addBCC($_POST['mail']);

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Demande de Renouvellement de mot de passe';
            $mail->Body    = $message;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $data['success']=true;
            $requete='insert into token (id_login,date,jeton) values ("'.$id.'",now(),"'.$token.'");';
            $result=$maBD->getconn() ->query($requete);
            //echo $requete;

        } catch (Exception $e) {
            $errors['message']='Pbs envoie de mail !'. $mail->ErrorInfo;
            $data['success']=false;
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
        $data['message'] = "Vous aller recevoir un mail pour pouvoir modifier votre mot de passe !";

    }
}
echo json_encode($data);
?>