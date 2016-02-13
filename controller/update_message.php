<?php
session_start();
$id = $_GET['id'];
$titel = $_GET['titel'];
$message = $_GET['message'];

$allowedTags = '';
$allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
$allowedTags.='<li><ol><ul><span><div><br><ins><del>'; 
$message = strip_tags($message, $allowedTags);

include '../model/connect.php';

$sql = "UPDATE message SET titel='$titel', message='$message' WHERE id=$id";
$result = mysqli_query($conn, $sql);

$action = "Message editted succesfully";
$_SESSION['action'] = $action;
header('location: ../view/confirm.php');

?>