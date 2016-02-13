<?php
session_start();

include '../model/connect.php';
$titel = $_POST['titel'];
$message = $_POST['message'];

$sql="INSERT INTO message(id, titel, message, op) VALUES ('', '$titel', '$message', {$_SESSION['id']})";

$result = mysqli_query($conn, $sql);

$action = "Message uploaded succesfully";
$_SESSION['action'] = $action;
header('location: ../view/confirm.php');

?>