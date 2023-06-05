<?php

function sendForm () {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $message = htmlspecialchars($_POST['message']);
    $objetstaff = htmlspecialchars($_POST['objet']);
    $objetclient = 'Accusé de réception de votre demande '.$objetstaff;
    $mail = htmlspecialchars($_POST['mail']);
    $headers = 'Reply-To: '. $mail;
    $headersclient = 'Reply-To: laclairiere.moissy@gmail.com';
    $textemailstaff = $nom . " " . $prenom . " vous a contacté depuis votre site avec le message suivant :\n" . $message . " \n\nAdresse mail : " . $mail;
    $textemailclient = "Bonjour ".$nom . " " . $prenom . ",\nNous avons bien reçu votre message et vous répondrons dans les plus brefs délais :\n" . $message . "\n\nBien cordialement,\nL'équipe de La Clairière";
    mail($mail, $objetclient, $textemailclient, $headersclient);
    return mail('la.clairiere.moissy@gmail.com', $objetstaff, $textemailstaff, $headers);
}

