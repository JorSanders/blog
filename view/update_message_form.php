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
	<form action=\"../controller/update_message.php\" method=\"GET\">
		<input type=\"text\" name=\"titel\" value=\"$titel\"><br>
		<textarea name=\"message\" cols=\"60\" rows=\"20\">$message</textarea><br>
		<input type=\"hidden\" name=\"id\" value=\"$id\"><br>
		<input type=\"submit\" name=\"submit\" value=\"Edit\"><br>
	</form>
	";
}


?>