<?php
	$filename="uploads/list_full.txt";
	echo nl2br( file_get_contents($filename) );
?>