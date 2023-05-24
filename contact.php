<?php
session_start();

require_once "config.php";

if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$page_title = 'Contact';

ob_start();
require_once 'app/model/databaseConnection.php';
require_once 'app/model/contact.model.php';

if (isset($_POST['envoyer'])){
    if (sendForm()) {
        $message="Votre message est bien envoyé.";
    } else {
        $message="Il y a eu une erreur lors de l'envoi de votre message.";
    }
}

require_once 'app/view/contact.view.php';

$content = ob_get_clean();

require_once 'app/view/common/layout.php';