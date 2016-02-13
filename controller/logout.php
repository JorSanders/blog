<?php
session_start();
session_destroy();

session_start();
$action = "Logged out succesfully";
$_SESSION['action'] = $action;
header('location: ../view/confirm.php');
?>