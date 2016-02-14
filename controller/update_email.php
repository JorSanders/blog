<?php
session_start();
$email = $_POST['email'];


include '../model/connect.php';

$sql = "UPDATE user SET email='$email' WHERE id={$_SESSION['id']}";
$result = mysqli_query($conn, $sql);

$action = "Email changed";

$_SESSION['action'] = $action;
header('location: ../view/confirm.php');

?>