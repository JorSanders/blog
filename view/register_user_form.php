<?php
include '../include/menu.php';
include '../include/header.php';
?>
<h3>Register form</h3>
<form action="../controller/register_user.php" method="POST">

<input type="text" name="username" placeholder="username" required><br>
<input type="text" name="name" placeholder="name" required> <span STYLE="font-size:12px;">(Others wont be able to see this)</span><br> 
<input type="password" name="password" placeholder="password" required><br>
<input type="submit" name="sumbit" value="register"><br>


</form>
<?php
include '../include/footer.php';
?>