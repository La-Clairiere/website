<?php
session_start();

require_once "config.php";

if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$page_title = 'Contact';

require_once 'databaseConnection.php';
