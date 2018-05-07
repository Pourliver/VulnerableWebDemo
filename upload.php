<?php
require_once 'connection.php';

if (isset($_POST['upload'])) {

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    
    move_uploaded_file($_FILES["upload"]["name"], $target_file);
    //Save File
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form class="login" method="POST">
        <input type="file" name="upload">
        <input type="submit" value="Upload File" name="submit">
        <?php
            if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                echo "Upload failed";
            }
        ?>
    </form>    
</body>
</html>