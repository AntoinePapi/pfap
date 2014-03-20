<?php
$msg_erreur = "Error. Missing Fields:<br/><br/>";
$msg_ok = "Your message has been send. Thanks.";
$message = $msg_erreur;
define('MAIL_DESTINATAIRE','romain.barbier@mail.com'); // remplacer par votre email
define('MAIL_SUJET','Message du formulaire de antoinepapi.com');
// vérification des champs
if (empty($_POST['user'])){
	$message .= "Your name is missing<br/>";
}
if (empty($_POST['email'])){
	$message .= "Your emailn is missing<br/>";
}
if (empty($_POST['subject'])){
	$message .= "Your Subject is missing<br/>";
}
if (empty($_POST['message'])){
	$message .= "Your message is missing<br/>";
}
 
// si un champ est vide, on affiche le message d'erreur et on stoppe le script
if (strlen($message) > strlen($msg_erreur)) {
   echo $message; die();
}
 
// sinon c'est ok => on continue
foreach($_POST as $index => $valeur) {
  $$index = stripslashes(trim($valeur));
}
 
$text = $_POST['message'];
$subject = $_POST['subject'];
$mail = $_POST['email'];
//Préparation de l'entête du mail:
$mail_entete .= "From: {$_POST['user']} "
             ."<{$_POST['email']}>\r\n";
$mail_entete .= 'Reply-To: '.$_POST['email']."\r\n";
$mail_entete .= 'Content-Type: text/plain; charset="iso-8859-1"';
$mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
$mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";
 
// préparation du corps du mail
$mail_corps  = "From : $mail\n Subject: $subject\n Message : $text\n";
 
// envoi du mail
if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
  //Le mail est bien expédié
  echo $msg_ok;
} else {
  //Le mail n'a pas été expédié
  echo "Une erreur est survenue lors de l'envoi du formulaire par email";
}
 
?>