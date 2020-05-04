<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <form action="./functions/sy_login.php" method="POST">
        <label for="username">User:</label>
            <input type="text" name="username" id="username">

        <label for="password">Password:</label>
            <input type="password" name="password" id="password">

        <button type="submit">Sign-in</button>
    </form>
    <?php 
    if($_SESSION['db_error'] != "")
        echo $_SESSION['db_error']; 
    ?>
</body>
</html>