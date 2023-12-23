<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<?php $message="Votre nom: ".$HTTP_POST_VARS["nom"]."\n";


$message=$message."Votre prenom: ".$HTTP_POST_VARS["prenom"]."\n";


$message=$message."Votre e-mail : ".$HTTP_POST_VARS["e-mail"]."\n\n";


$message=$message."Votre message:


\n\n".$HTTP_POST_VARS["message"];


mail("bressepinglouhans71@gmail.com","Message du site","$message");


header('Location:contact_retour.php');


?>
</head><body>
<br>

<br>
</body></html>