<?php
	session_start();
  $search = $_SESSION["regno"];
 $filename="chat/users.txt";
 $contents = file_get_contents($filename);
 $contents = str_replace($search, "", $contents,$count);
 if($count>0)
 {
  file_put_contents($filename,$contents);
 }
 header("Location: index.php");
 exit();
?>