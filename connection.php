<?php
//FLAG{fil3iNclu5i0nL0V3sPHPf1lTeRs}
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "secure_user";
$password = "secret_password";
$dbname = "web_demo";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 