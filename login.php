<?php
require_once 'connection.php';
$msg = "";

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"]; 
    $password = $_POST["password"];

    $sql = 'SELECT * FROM users WHERE username="' . $username . '" AND password="' . $password . '";';

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count) {
        $row = mysqli_fetch_row($result);
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row[1];
        $_SESSION['status']   = $row[3];
        header('Location: /?page=index');
        exit;
    } else {
        $msg = "failed";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form class="login" method="POST" action="/login.php">
        <label for="username"><b>Username</b></label>
        <input id="username" name="username" type="text" /><br/>
        <label for="password"><b>Password</b></label>
        <input id="password" name="password" type="password" />
        <button class="submit" type="submit">Login</button>
        <?php
            if ($msg == 'failed') {
                echo "Wrong Username / Password";
            }
        ?>
    </form>    
</body>
</html>