<?php
session_start();

include '../model/connect.php';
$titel = $_POST['titel'];
$message = $_POST['message'];

$allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
$allowedTags.='<li><ol><ul><span><div><br><ins><del>'; 
$message = strip_tags($message, $allowedTags);

$sql="INSERT INTO `message` (`titel`, `message`, `op`) VALUES ('$titel', '$message', {$_SESSION['id']})";

$result = mysqli_query($conn, $sql);

$action = "Message uploaded succesfully";


$email = "";
$sql = "SELECT email FROM user WHERE id = '".$_SESSION['id']."'";
$result = mysqli_query($conn, $sql); 
if (mysqli_num_rows($result) > 0 )
{
	$row=mysqli_fetch_row($result);
	$email = $row['0'];
	
	// Free result set wtf doet dit tho?
	mysqli_free_result($result);


	$to      = "$email";
	$subject = 'Blog post placed';
	$message = 'Hey, you have placed a blog post';
	$headers = 'From: noreply@iie.nl' . "\r\n" .
		'Reply-To: noreply@iie.nl' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	$action = $action."<br> and confirm email send";
}else {
    $action = $action."<br> no confirm email send"; 
}


$_SESSION['action'] = $action;
header('location: ../view/confirm.php');

?>