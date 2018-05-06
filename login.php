<?php
require_once 'connection.php';


if (isset($_POST['username']) && isset($_POST['username'])) {
    $username = $_POST['username']; 
    $password = $_POST['password'];

    $sql = 'SELECT * FROM users WHERE username="' + $username + '" AND password="' + $password + '"';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count) {
        $_SESSION['loggedin'] = true;
        // TODO : Add if admin
        $_SESSION['admin'] = false;
        header('Location: /?page=index');
        exit;
    } else {
        header('Location: /login.php?msg=failed');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form class="login" method="POST">
        <label for="username"><b>Username</b></label>
        <input id="username" name="username" type="text" /><br/>
        <label for="password"><b>Password</b></label>
        <input id="password" name="password" type="password" />
        <button class="submit" type="submit">Login</button>
        <?php
            if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
            echo "Wrong Username / Password";
            }
        ?>
    </form>    
</body>
</html>