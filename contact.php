﻿<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>
		Bresse Ping
	</title>
	<link rel="shortcut icon" type="image/ico" href="favicon.ico">
	<meta content="Thierry Lachaux" name="author">
	<meta content="Club sportif de tennis de table, ping-pong à Louhans Chateaurenaud, en Bresse, affilié à FFTT"
		name="description">
	<meta name="keywords"
		content="tennis de table, ping-pong, louhans, bresse, oms, chateaurenaud, club sportif, gymnase, lycee agricole, fftt, lbtt">
	<link rel="stylesheet" href="css/base.css">
	<script src="https://kit.fontawesome.com/d559253348.js" crossorigin="anonymous"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'UA-29967241-1');
	</script>
</head>

<body>
	<table class="fond_principal" style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
		cellpadding="2" cellspacing="0">
		<tbody>
			<tr>
				<td style="vertical-align: top;">
					<?php
					include("cartouche.php");
					include("menu.php");
					?>
					<hr style="width: 100%; height: 2px;">
					<div id="titre_page">
						contact
						<br>
						<br>
					</div>
					<div>
						<br>
						Cette page vous permet de nous contacter pour une demande de renseignements, ou tout simplement
						pour nous donner votre impression sur ce site ou toute autre remarque, afin de l'améliorer.
						Merci!
						<br>
						<br>
						<?php
						/*
																		  // expéditeur du dormulaire. Pour des raisons de sécurité, de plus en plus d'hébergeurs imposent que ce soit une adresse sur votre hébergement/nom de domaine.
																		  // Par exemple si vous mettez ce script sur votre site "test-site.com", mettez votre email @test-site.com comme expéditeur (par exemple contact@test-site.com)
																		  // Si vous ne changez pas cette variable, vous risquez de ne pas recevoir de formulaire.
																		  $email_expediteur = 'Bresse-Ping<bressepi@60gp.ovh.net>\n';
																		  $nom_expediteur = 'Contact site Bresse-Ping';

																		  // destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par un point-virgule
																		  $destinataire = 'bressepinglouhans71@gmail.com';

																		  // copie ? (envoie une copie au visiteur)
																		  $copie = 'oui';

																		  // Action du formulaire (si votre page a des paramètres dans l'URL)
																		  // si cette page est index.php?page=contact alors mettez index.php?page=contact
																		  // sinon, laissez vide
																		  $form_action = '';

																		  // Messages de confirmation du mail
																		  $message_envoye = "Votre message nous est bien parvenu !";
																		  $message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

																		  // Message d'erreur du formulaire
																		  $message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

																		  /*
																																																																																																																			********************************************************************************************
																																																																																																																			FIN DE LA CONFIGURATION
																																																																																																																			********************************************************************************************
																																																																																																																		*/

						/*
						 * cette fonction sert à nettoyer et enregistrer un texte
						 */
						function Rec($text)
						{
							$text = htmlspecialchars(trim($text), ENT_QUOTES);
							if (1 === get_magic_quotes_gpc()) {
								$text = stripslashes($text);
							}

							$text = nl2br($text);
							return $text;
						}
						;

						/*
						 * Cette fonction sert à vérifier la syntaxe d'un email
						 */
						function IsEmail($email)
						{
							$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
							return (($value === 0) || ($value === false)) ? false : true;
						}

						// formulaire envoyé, on récupère tous les champs.
						$nom = (isset($_POST['nom'])) ? Rec($_POST['nom']) : '';
						$email = (isset($_POST['email'])) ? Rec($_POST['email']) : '';
						$objet = (isset($_POST['objet'])) ? Rec($_POST['objet']) : '';
						$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

						// On va vérifier les variables et l'email ...
						$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
						$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin
						
						if (isset($_POST['envoi'])) {
							if (($nom != '') && ($email != '') && ($objet != '') && ($message != '')) {
								$headers = 'MIME-Version: 1.0' . "\r\n";
								$headers .= 'From:' . $nom_expediteur . ' <' . $email_expediteur . '>' . "\r\n" .
									'Reply-To:' . $email . "\r\n" .
									'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed ' . "\r\n" .
									'Content-Disposition: inline' . "\r\n" .
									'Content-Transfer-Encoding: 7bit' . " \r\n" .
									'X-Mailer:PHP/' . phpversion();

								// envoyer une copie au visiteur ?
								if ($copie == 'oui') {
									$cible = $destinataire . ';' . $email;
								} else {
									$cible = $destinataire;
								}
								;

								// Remplacement de certains caractères spéciaux
								$caracteres_speciaux = array('&#039;', '&#8217;', '&quot;', '<br>', '<br />', '&lt;', '&gt;', '&amp;', '…', '&rsquo;', '&lsquo;');
								$caracteres_remplacement = array("'", "'", '"', '', '', '<', '>', '&', '...', '>>', '<<');

								$objet = html_entity_decode($objet);
								$objet = str_replace($caracteres_speciaux, $caracteres_remplacement, $objet);

								$message = html_entity_decode($message);
								$message = str_replace($caracteres_speciaux, $caracteres_remplacement, $message);

								// Envoi du mail
								$cible = str_replace(',', ';', $cible); // antibug : j'ai vu plein de forums où ce script était mis, les gens ne font pas attention à ce détail parfois
								$num_emails = 0;
								$tmp = explode(';', $cible);
								foreach ($tmp as $email_destinataire) {
									if (mail($email_destinataire, $objet, $message, $headers))
										$num_emails++;
								}

								if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1))) {
									echo '<p>' . $message_envoye . '</p>';
								} else {
									echo '<p>' . $message_non_envoye . '</p>';
								}
								;
							} else {
								// une des 3 variables (ou plus) est vide ...
								echo '<p>' . $message_formulaire_invalide . '</p>';
								$err_formulaire = true;
							}
							;
						}
						; // fin du if (!isset($_POST['envoi']))
						
						if (($err_formulaire) || (!isset($_POST['envoi']))) {
							// afficher le formulaire
							echo '
								<form id="contact" method="post" action="' . $form_action . '">
									<fieldset>
										<legend>Vos coordonnées</legend>
										<p>
											<label for="nom">Nom :</label>
											<input type="text" id="nom" name="nom" value="' . stripslashes($nom) . '" />
										</p>
										<p>
											<label for="email">Email :</label>
											<input type="text" id="email" name="email" value="' . stripslashes($email) . '" />
										</p>
									</fieldset>
								
									<fieldset>
										<legend>Votre message :</legend>
										<p>
											<label for="objet">Objet :</label>
											<input type="text" id="objet" name="objet" value="' . stripslashes($objet) . '" />
										</p>
										<p>
											<label for="message">Message :</label>
											<textarea id="message" name="message" cols="30" rows="8">' . stripslashes($message) . '</textarea>
										</p>
									</fieldset>
									<div style="text-align:center;">
										<input type="submit" name="envoi" value="Envoyer le formulaire !" />
									</div>
								</form>';
						}
						;
						?>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</body>

</html>