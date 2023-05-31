<?php
session_start();

require_once "config.php";
require_once 'app/model/databaseConnection.php';

$page_title = 'Notre histoire';

ob_start();

require_once 'app/model/notrehistoire.model.php';

$trombi = getEquipe();

require_once 'app/view/notrehistoire.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';