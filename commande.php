<?php
session_start();

require_once "config.php";
require_once 'app/model/databaseConnection.php';

$page_title = 'Commande';

ob_start();

require_once 'app/model/commande.modele.php';

$all_beers = getAllBeers();

require_once 'app/view/commande.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';
