<?php
include '../model/connect.php';
include '../include/menu.php';
include '../include/header.php';



$sql = "SELECT * 
FROM message, user
	WHERE message.op = user.id
GROUP BY user.admin DESC, message.id DESC";
$result = mysqli_query($conn, $sql);


while(list($id, $titel, $message, $op)= mysqli_fetch_row($result)){
	$sql2 = "SELECT username FROM user WHERE id = $op";
	$result2 = mysqli_query($conn, $sql2);
	$username = mysqli_fetch_assoc($result2)['username'];
	

	echo "<span id='postowner'> $titel &nbsp; &nbsp; by $username </span>";
	if( file_exists("../user_avatars/$username.jpg")){
		echo"<img id='avatarInBlog' src='../user_avatars/$username.jpg' alt='Error loading avatar' >";
	}	
	echo "<br> <br>$message <br>";

	if($op == @$_SESSION['id'] || @$_SESSION['admin'] == 1){
		echo"<a href=\"update_message_form.php?id=$id\">Edit message</a>&nbsp; &nbsp; &nbsp;
		<a href=\"delete_message_form.php?id=$id\">Delete message</a>";}


	echo"<br><hr><br>";
}

include '../include/footer.php';
?>