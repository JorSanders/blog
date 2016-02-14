<?php
include '../include/menu.php';
include '../include/header.php';
include '../include/sentry.php';
?>

<body>

<form action="../controller/upload_avatar.php" method="post" enctype="multipart/form-data">
    Upload avatar(jpg): <br>
    <input type="file" name="uploadAvatar" id="fileToUpload" > <br>
    <input type="submit" value="Upload Avatar" name="submit"> <br>
</form>

<form  action="../controller/update_email.php" method="post" >
	Email: 
	<br>Others cant see this, only used to send confirm emails. <br>
	<input type="email" name="email"> <br>
	<input type="submit" value="Change email" name="submit"> <br>
</form>

</body>

<?php
include '../include/footer.php';
?>