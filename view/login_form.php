<?php
include '../include/menu.php';
include '../include/header.php';
?>
<h3>Login</h3>
<form action="../controller/login.php" method="POST">

<input type="text" name="username" placeholder="username" required><br>
<input type="password" name="password" placeholder="password" required><br>
<input type="submit" name="sumbit" value="login"><br>


</form>

<?php
include '../include/footer.php';
?>