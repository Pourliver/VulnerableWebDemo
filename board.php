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

if (isset($_POST['clear'])) {
    $sql = 'delete from comments';
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
    <h1>List of comments</h1>
    <?php
    $sql = 'SELECT * FROM comments';
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_row($result)) {
            printf ("<p>%s</p>", $row[1]);
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