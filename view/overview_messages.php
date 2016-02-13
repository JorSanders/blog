<?php
include '../model/connect.php';
include '../include/menu.php';
include '../include/header.php';



$sql = "SELECT * FROM message";
$result = mysqli_query($conn, $sql);


while(list($id, $titel, $message, $op)= mysqli_fetch_row($result)){
	echo "<table>";
	$sql2 = "SELECT username FROM user WHERE id = $op";
	$result2 = mysqli_query($conn, $sql2);
	$username = mysqli_fetch_assoc($result2)['username'];
	echo "<tr><td>Gepost door: $username</td></tr>";
	echo "<tr><td>Titel van de post: $titel</td>
	</td> <tr><td>".nl2br($message)."</tr></td>";
	if($op == @$_SESSION['id'] || @$_SESSION['admin'] == 1){
		echo"<tr><td><a href=\"update_message_form.php?id=$id\">Edit message</a>&nbsp; &nbsp; &nbsp;
		<a href=\"delete_message_form.php?id=$id\">Delete message</a></td></tr>";}
	echo "</table>";

	echo"<br><br>";
}

include '../include/footer.php';
?>