<?php
session_start();
$target_dir = "../user_avatars/";
$target_file = $target_dir . basename($_FILES["uploadAvatar"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file = $target_dir ."{$_SESSION['username']}.". $imageFileType;




// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploadAvatar"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
		$action = "File is not an image.";
		$_SESSION['action'] = $action;
		header('location: ../view/confirm.php');
        $uploadOk = 0;
    }
}
/*
// Check if file already exists
if (file_exists($target_file)) {
	$action = "Sorry, file already exists.";
	$_SESSION['action'] = $action;
	header('location: ../view/confirm.php');
    $uploadOk = 0;
}
*/

// Check file size
if ($_FILES["uploadAvatar"]["size"] > 500000) {
	$action = "Sorry, your file is too large.";
	$_SESSION['action'] = $action;
	header('location: ../view/confirm.php');
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg") {
	$action = "Sorry, only JPG files are allowed.";
	$_SESSION['action'] = $action;
	header('location: ../view/confirm.php');
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$action = $action."<br>Sorry, your file was not uploaded.";
	$_SESSION['action'] = $action;
	header('location: ../view/confirm.php');
	
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadAvatar"]["tmp_name"], $target_file)) {
		$action = "Your avatar has been uploaded.";
		$_SESSION['action'] = $action;
		header('location: ../view/confirm.php');
    } else {
		$action = "Sorry, there was an error uploading your file.";
		$_SESSION['action'] = $action;
		header('location: ../view/confirm.php');
    }
}
?>