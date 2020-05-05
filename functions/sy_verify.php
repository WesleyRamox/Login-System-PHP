<?php
session_start();

// VERIFYING THAT IF SECTION '$_SESSION['user'] = $username;' WAS CREATED
if(!$_SESSION['user']) {
	header('Location: ../index.php');
	exit();
}