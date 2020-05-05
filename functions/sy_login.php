<?php
session_start();
require('../config/db.php');

// CHECKING IF THE INPUTS ARE EMPTY
if(empty($_POST['username']) || empty($_POST['password'])) {
    $_SESSION['err_login'] = "Enter a username and password";
    header('Location: ../index.php');
}

// CLEANING WHAT WAS ENTERED INTO INPUT FOR MYSQL
$user = mysqli_real_escape_string($connection, $_POST['username']);
$pass = mysqli_real_escape_string($connection, $_POST['password']);

// CLEANING SPECIAL CHARACTERS
$username = filter_var($user, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
$password = filter_var($pass, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);

$Sqlquery = "SELECT * FROM users WHERE username = '$username' and password = MD5('$password') LIMIT 1";

$query = mysqli_query($connection, $Sqlquery);

$row = mysqli_fetch_assoc($query);

// QUANTITY OF ROWS FOUND
$resultQuery = mysqli_num_rows($query);

if($resultQuery == 1 && $row['isAdmin'] == 1) {
    $_SESSION['user'] = $username;
    $_SESSION['admin'] = $row['isAdmin'];
    header('Location: ../panel/admin.php');
    exit();
    
} elseif ($resultQuery == 1 && $row['isAdmin'] == 0) {
    $_SESSION['user'] = $username;
	header('Location: ../panel/panel.php');
    exit();
    
} else {
    header('Location: ../index.php');
    exit();
}