<?php 
session_start();

// VERIFYING THAT IF SECTION '$_SESSION['admin'];' WAS CREATED
if(!$_SESSION['admin']) {
	header('Location: ../index.php');
	exit();
}