<?php
include '../include/menu.php';
include '../include/header.php';

$id = $_GET['id'];

include '../model/connect.php';



$sql = "SELECT titel, message 
FROM message
WHERE id=$id";
$result = mysqli_query($conn, $sql);


while(list($titel, $message)= mysqli_fetch_row($result)){
	echo "
	<p>$titel</p>
	<p>$message</p>
	<p>Are you sure you want to delete the message</p>
	<a href=\"../controller/delete_message.php?id=$id\">yes<a>
	<a href=\"overview_messages.php\">no<a>
	";
}

include '../include/footer.php';
?>