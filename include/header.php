<link rel=stylesheet href="../style/style.css" type="text/css">

<div id="header">
<span id="headerText">
Wow de Jor blog 
</span>

<span id="loginStatus">
<?php 


if(isset($_SESSION['username'])){
	echo "Welcome {$_SESSION['name']}!<br>
	Logged in as {$_SESSION['username']}";
}else {
	echo "Welcome guest";
}
?>
</span>
</div>

<div id="content">
<span id="contentText">