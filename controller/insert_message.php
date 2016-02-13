<?php
session_start();

include '../model/connect.php';
$titel = $_POST['titel'];
$message = $_POST['message'];

$allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
$allowedTags.='<li><ol><ul><span><div><br><ins><del>'; 
$message = strip_tags($message, $allowedTags);

$sql="INSERT INTO message(id, titel, message, op) VALUES ('', '$titel', '$message', {$_SESSION['id']})";

$result = mysqli_query($conn, $sql);

$action = "Message uploaded succesfully";
$_SESSION['action'] = $action;
header('location: ../view/confirm.php');

?>