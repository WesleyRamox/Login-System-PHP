<?php 
// VARIABLES FOR SIMPLER READING AND EDITING
$host = "localhost"; // 127.0.0.1
$user = "root";
$pass = "";
$db = "login";

// CONNECTING WITH MYSQLi
$connection = mysqli_connect($host, $user, $pass, $db);

// IF THE CONNECTION IS NOT MADE
if(!$connection){
    $_SESSION['db_error'] = "Error: Contact support";
    header('Location: index.php');
} else {
    header('Location: ../index.php');
}