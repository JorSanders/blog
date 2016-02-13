<?php
include '../include/menu.php';
include '../include/header.php';

$action = $_SESSION['action'];

echo"$action <br>";
echo"Go back to the blog <a href=\"../index.php\">here</a>";

include '../include/footer.php';
?>