<?php
	$target_dir = "uploads/";
	session_start();
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	$file_data = $_SESSION["regno"]."\n";
	$file_data .= file_get_contents('uploads/list.txt');
	file_put_contents('uploads/list.txt', $file_data);
	$file_data = file_get_contents('uploads/list.txt');
	$file_data .= file_get_contents('uploads/list_full.txt');
	file_put_contents('uploads/list_full.txt', $file_data);
	header("Location: /main_menu.php");
	exit();
?>