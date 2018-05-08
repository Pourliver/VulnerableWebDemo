<?php
require_once 'connection.php';

if (!$_SESSION['loggedin']) {
    header("Location: /login.php");
    exit;
}

// Requesting self will crash the server
if (!$_GET['page'] || $_GET['page'] == 'index' ||strpos($_GET['page'], '../index') !== false) {
    header("Location: /index.php?page=board");
    exit;
}

include($_GET['page'] . '.php');
?>
