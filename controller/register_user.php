<?php
session_start();
include '../model/connect.php';

$username = $_POST['username'];
$name = $_POST['name'];
   $password= md5($_POST['password']);

$sql = "INSERT INTO user (username, name, password) VALUES ('$username', '$name', '$password') ";
$result = mysqli_query($conn, $sql);

$action = "Thank you for registering, log in <a href=\"../view/login_form.php\">here</a>";
$_SESSION['action'] = $action;
header('location: ../view/confirm.php');

