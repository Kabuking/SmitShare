<?php
	session_start();
	$_SESSION["regno"] = $_POST['regno'];
	header("Location: main_menu.php");
	exit();
?>