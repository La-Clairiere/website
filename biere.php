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
$page_title = 'biere';


require_once 'app/view/catalogue.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 