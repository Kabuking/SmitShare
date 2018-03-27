<!DOCTYPE html>
<?php
	header("Refresh:2");
?>
<html>
<head><style>
body{
font-family: monospace;
font-size:20px;
}
.rightcolumn {
    float: right;
    width: 20%;
	height: 100vh;
    padding-left: 20px;
	padding-top:10px
	font-size:30px;
}
</style>
</head>
<body>
<h2>Users online</h2>
<?php
/*
$handle = fopen("users.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
		
        echo $line;
		// process the line read.
    }

    fclose($handle);
} else {
    // error opening the file.
}
*/
echo nl2br( file_get_contents('users.txt') ) 
?>
</body>
</html>