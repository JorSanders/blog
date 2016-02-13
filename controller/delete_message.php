<?php
session_start();

$id = $_GET["id"];

include '../model/connect.php';

$sql = "DELETE
FROM message
WHERE id=$id";
$result = mysqli_query($conn, $sql);

$action = "Message deleted succesfully";
$_SESSION['action'] = $action;
header('location: ../view/confirm.php');


?>