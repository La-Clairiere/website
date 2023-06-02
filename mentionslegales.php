<?php
session_start();

require_once "config.php";
require_once 'app/model/databaseConnection.php';

$page_title = 'Mentions légales';

ob_start();



require_once 'app/view/mentionslegales.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';