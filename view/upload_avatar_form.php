<?php
include '../include/menu.php';
include '../include/header.php';
include '../include/sentry.php';
?>

<body>

<form action="../controller/upload_avatar.php" method="post" enctype="multipart/form-data">
    Select image to upload: <br>
    <input type="file" name="uploadAvatar" id="fileToUpload" required> <br>
    <input type="submit" value="Upload Avatar" name="submit"> <br>
</form>

</body>

<?php
include '../include/footer.php';
?>