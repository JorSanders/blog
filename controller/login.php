<?php
session_start();

include '../model/connect.php';

$username = $_POST['username'];
 $password = md5($_POST['password']);

$sql="SELECT username, name, password, id, admin 
FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$number = mysqli_num_rows($result);

if($number==1){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	
	$details = mysqli_fetch_assoc($result);

	$_SESSION['admin']=$details['admin'];
	$_SESSION['name']=$details['name'];
	$_SESSION['id']=$details['id'];
	
	
	$action = "Welcome $username, you have logged in";
	$_SESSION['action'] = $action;
	header('location: ../view/confirm.php');

}else{
	$action = "Login details incorrect <br>
	You can register <a href=\"../view/register_user_form.php\">here</a><br>
	Or go back to the login page <a href=\"../view/login_form.php\">here</a>";
	$_SESSION['action'] = $action;
	header('location: ../view/confirm.php');

	}
?>