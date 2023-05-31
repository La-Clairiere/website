<?php
session_start();
if(isset($_POST['login'])) {
    if($_POST['login'] == 'laclairiere') {
        $_SESSION['logged'] = true;
    }
    else {
        $login_error = true;
    }
}

require_once "config.php";
require_once 'app/model/databaseConnection.php';

$page_title = 'Liste des commandes';

ob_start();

require_once 'app/model/suivicommande.model.php';

$all_beers = getAllBeers();
$commandes = getCommandes();
$noms_bieres = getNomsBieres();

require_once 'app/view/suivicommande.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';