<!DOCTYPE HTML>
<html lang="fr">

<head>

    <?php
    /* Récupération des informations du formulaire*/
    if (get_magic_quotes_gpc()) {
        $nom = stripslashes(trim($_POST['nom']));
        $prenom = stripslashes(trim($_POST['prenom']));
        $dossier = stripslashes(trim($_POST['dossier']));
        $societe = stripslashes(trim($_POST['societe']));
        $rcs = stripslashes(trim($_POST['rcs']));
        $code = stripslashes(trim($_POST['code']));
        $ville = stripslashes(trim($_POST['ville']));
        $telephone = stripslashes(trim($_POST['telephone']));
        $fax = stripslashes(trim($_POST['fax']));
        $mail = stripslashes(trim($_POST['mail']));
        $motif = stripslashes(trim($_POST['motif']));
        $message = stripslashes(trim($_POST['message']));
    } else {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $dossier = trim($_POST['dossier']);
        $societe = trim($_POST['societe']);
        $rcs = trim($_POST['rcs']);
        $adresse = trim($_POST['adresse']);
        $code = trim($_POST['code']);
        $ville = trim($_POST['ville']);
        $telephone = trim($_POST['telephone']);
        $fax = trim($_POST['fax']);
        $mail = trim($_POST['mail']);
        $motif = trim($_POST['motif']);
        $message = trim($_POST['message']);
    }
    /*Vérifie si l'adresse mail est au bon format */
    $regex_mail = '/^[-+.w]{1,64}@[-.w]{1,64}.[-.w]{2,6}$/i';
    /*Verifie qu il n y est pas d en tête dans les données*/
    $regex_head = '/[nr]/';
    /*Vérifie qu il n y est pas d erreur dans adresse mail*/
    if (!preg_match($regex_mail, $mail)) {
        $alert = "L'adresse " . $mail . " n'est pas valide";
    } else {
        $courriel = 1;
    }
    /* On affiche l'erreur s'il y en a une */
    if (!empty($alert)) {
        $courriel = 0;
    }
    /* On vérifie qu'il n'y a aucun header dans les champs */
    if (
        preg_match($regex_head, $nom)
        || preg_match($regex_head, $prenom)

        || preg_match($regex_head, $mail)

        || preg_match($regex_head, $message)
    ) {
        $alert = 'En-têtes interdites dans les champs du formulaire';
    } else {
        $header = 1;
    }
    /* On affiche l'erreur s'il y en a une */
    if (!empty($alert)) {
        $header = 0;
    }
    if (
        empty($nom)
        || empty($message)
    ) {
        $alert = 'Tous les champs doivent être renseignés';
    } else {
        $renseigne = 1;
    }
    /* On affiche l'erreur s'il y en a une */
    if (!empty($alert)) {
        $renseigne = 0;
    }
    /* Si les variables sont bonne */
    if ($renseigne == 1 and $header == 1 and $courriel == 1) {
        /*Envoi du mail*/

        /*Le destinataire*/
        $to = "bressepinglouhans71@gmail.com";

        /*Le sujet du message qui apparaitra*/
        $sujet = "Message depuis le site";
        $msg = '';
        /*Le message en lui même*/
        /*$msg = 'Mail envoye depuis le site' "rnrn";*/
        $msg .= 'Nom : ' . $nom . "rnrn";
        $msg .= 'Prenom : ' . $prenom . "rnrn";
        $msg .= 'Mail : ' . $mail . "rnrn";
        $msg .= 'Message : ' . $message . "rnrn";
        /*Les en-têtes du mail*/
        $headers = 'From: MESSAGE DU SITE FAFA<bressepinglouhans71@gmail.com>' . "rn";
        $headers .= "rn";
        /*L'envoi du mail - Et page de redirection*/
        mail($to, $sujet, $msg, $headers);
        header('Location:contact_retour.php');
    } else {
        header('Location:');
    }
    ?>

</head>

<body>
    <br>

    <br>
</body>

</html>