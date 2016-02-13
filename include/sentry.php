<?php

include '../model/connect.php';
if(!isset($_SESSION['username'])){
	die ("You have nog logged in yet, login <a href=\"../view/login_form.php\">here</a>");
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];

$sql="SELECT username, password FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$number = mysqli_num_rows($result);

if($number<1){
	echo "you are not in the database";
	die();
}
?>