<?php
//lol
$servername = "localhost";
$username = "secure_user";
$password = "UlTRa_S3Cr3t_P4Ssw0RD";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 