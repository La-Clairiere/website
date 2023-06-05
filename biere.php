<?php 
session_start();

require_once "config.php";


if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}



ob_start();
require_once 'app/model/databaseConnection.php';
require_once 'app/model/biere.model.php';
$id= intval($_GET['id']);
$biere= getBiere($id);
if(empty($biere)) {
    header("Location: catalogue.php");
    die();
}
$page_title = "Bière ".$biere['nom'];


require_once 'app/view/biere.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 