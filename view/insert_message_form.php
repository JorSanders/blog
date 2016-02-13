<head>
  <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>
	tinymce.init({selector: '#mytextarea'});
  </script>
</head>

<?php
include '../include/menu.php';
include '../include/header.php';
include '../include/sentry.php';


echo"<h3>Input your message here</h3>";
echo "
<form action=\"../controller/insert_message.php\" method=\"POST\">
	<input type=\"text\" name=\"titel\" ><br>
	<textarea id=\"mytextarea\" name=\"message\" cols=\"60\" rows=\"20\"></textarea><br>
	<input type=\"submit\" name=\"submit\" value=\"Upload message\"><br>
</form>
";


include '../include/footer.php';
?>