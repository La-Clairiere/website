<?php

function sendForm () {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $message = htmlspecialchars($_POST['message']);
    $objet = htmlspecialchars($_POST['objet']);
    $mail = htmlspecialchars($_POST['mail']);
    $headers = 'Reply-To: '. $mail;
    $textemail = $nom . " " . $prenom . " vous a contacté depuis votre site avec le message suivant :\n" . $message . " \n\nAdresse mail : " . $mail;
    return mail('la.clairiere.moissy@gmail.com', $objet, $textemail, $headers);

}

