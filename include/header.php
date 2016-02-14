<link rel=stylesheet href="../style/style.css" type="text/css">

<div id="header">
<span id="headerText">
Blog de bouwer!, kunnen wij het bouwen? 
</span>

<span id="loginStatus">
<?php 


if(isset($_SESSION['username'])){
	echo "Welcome {$_SESSION['name']}!<br>
	Logged in as {$_SESSION['username']}";
	echo"</span>";
	
	if( file_exists("../user_avatars/{$_SESSION['username']}.jpg")){
		echo"<img id='avatar' src='../user_avatars/{$_SESSION["username"]}.jpg' alt='Error loading avatar' >";
	}
	echo"<span id=\"loginStatus\">";
}else {
	echo "Welcome guest";
}
?>

</span>
</div>

<div id="content">
<span id="contentText">