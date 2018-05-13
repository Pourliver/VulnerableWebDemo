<?php

if (isset($_POST['comment'])) {
    $sql = 'INSERT INTO comments (comment) VALUES (?)';
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $_POST['comment']);

        $stmt->execute();
        $stmt->close();
    }
}

if (isset($_POST['clear']) && $_SESSION['status'] == 'admin') {
    $sql = 'TRUNCATE TABLE comments';
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->execute();
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Board</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Welcome, <? echo $_SESSION['username']; ?></h1>
    <h2>Status : <? echo $_SESSION['status']; ?></h2>

    <h2>List of comments</h1>
    <?php

    if ($_SESSION['status'] == 'admin') {
        echo '<form method="POST">';
        echo    '<button type="submit">Clear comments</button>';
        echo '</form>';
    }

    $sql = 'SELECT * FROM comments';
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_row($result)) {
            printf ('<p>%s</p>', $row[1]);
        }
    }
    ?>

    <form method="POST">
        <h2>Leave a comment!<h2>
        <textarea id="comment" name="comment" type="text" cols="60" rows ="3"></textarea><br>
        <button type="submit">Submit</button>
    </form>    
</body>
</html>