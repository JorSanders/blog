<?php
session_start();
$id = $_GET['id'];
$titel = $_GET['titel'];
$message = $_GET['message'];

include '../model/connect.php';

$sql = "UPDATE message SET titel='$titel', message='$message' WHERE id=$id";
$result = mysqli_query($conn, $sql);

$action = "Message editted succesfully";
$_SESSION['action'] = $action;
header('location: ../view/confirm.php');

?>