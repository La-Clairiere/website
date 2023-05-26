<?php
session_start();

require_once "config.php";
require_once 'app/model/databaseConnection.php';
$page_title = 'Commande';

ob_start();

require_once 'app/model/commande.model.php';
$date = date("Y-m-d h:i:s");
//Parcourt du tableau des quantités de bières commandées de chaque 
//Passage d'une commande différente pour chaque type de bière
$total = 0;
foreach ($_POST["beersQuantity"] as $key => $value) {
    if (!empty($value)) {
        //Calcul du prix de la commande de la bière en cours
        $prix = $_POST["beersPrice"][$key] * $value;
        $total = $total + $prix;
        //Ajout dans la BDD
        $res = addOrder($value, $_POST["nom"], $_POST["prenom"], $_POST["adresse"], $_POST["mail"], $_POST["tel"], $date, 1, $key, $prix);
    }
}

require_once 'app/view/commande_passee.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';