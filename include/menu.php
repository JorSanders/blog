<?php
session_start();
include '../model/connect.php';
echo"
<div id=\"menu\">
<ul id=\"menuList\">
Menu
<li><a href=\"../view/overview_messages.php\">Overview messages</a></li>
<li><a href=\"../view/insert_message_form.php\">Upload message</a></li>";
if(!isset($_SESSION['username'])){
	echo"
	<li><a href=\"../view/login_form.php\">Login</a></li>
	<li><a href=\"../view/register_user_form.php\">Register</a></li>";
}else{
	echo"
	<li><a href=\"../controller/logout.php\">log out</a></li>";
}
echo"
</ul>
<br><br>
</div>
";
?>