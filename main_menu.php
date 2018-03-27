<!DOCTYPE html>
<html>
<?php
	session_start();
	$search = $_SESSION["regno"];
	$filename="chat/users.txt";
	$contents = file_get_contents($filename);
	$count = substr_count($contents,$_SESSION["regno"]);
	if($count<1){
		file_put_contents("chat/users.txt",$_SESSION["regno"]."\r\n", FILE_APPEND | LOCK_EX );
	}
?>
<head><style>
#example1 {
    background-color:rgba(0, 0, 0, 0.66);
    background-repeat: no-repeat;
    padding:15px;
	margin: auto;
	text-align: left;
	font-family: monospace;
	padding-bottom: 52px;
}
body {
    background-image: url("/images/bg.jpg");
    background-repeat: no-repeat;
    background-position: right top;
    margin-left: auto;
    margin-right: auto;
    background-attachment: fixed;
	background-position: center;
	color: white;
}
.outer {
    display: table;
    position: absolute;
    height: 100%;
    width: 100%;
}

.middle {
    display: table-cell;
    vertical-align: middle;
}

.inner {
    margin-left: auto;
    margin-right: auto; 
    width: 400px; /*whatever width you want*/
}
h2 {
	font-family: monospace;
	font-size: 36px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}
.foo
{
    padding: 10px 24px;
	font-family: monospace;
	font-size: 16px;
}
.button {
	font-family: monospace;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
	font-family: monospace;
    background-color: #4CAF50; 
    color: white; 
}

.button1:hover {
	font-family: monospace;
    background-color: white;
    color: #4CAF50;
}
.rightcolumn {
    float: right;
	font-family: monospace;
    width: 20%;
	height: 100vh;
    background-color:rgba(255, 255, 255, 0.66);
    padding-left: 20px;
}
.topnav a {
	font-size:20px;
	background-color:rgba(0, 0, 0, 0.66);
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 10px;
    text-decoration: none;
	background-repeat: no-repeat;
}
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
nav{
	background-color:rgba(0, 0, 0, 0.66);
	width: 100%;
}
.button {
	font-family: monospace;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	float: right;
}
.button1 {
	font-family: monospace;
    background-color: #4CAF50; 
    color: white; 
}

.button1:hover {
	font-family: monospace;
    background-color: rgba(200, 200, 200, 1);;
    color: #4CAF50;
}
#forum{
	font-family: monospace;
	float: left;
    width: 75%;
	margin-left: 16px;
	padding-top: 20px;
	height: 100vh;
    background-color:rgba(255, 255, 255, 1);
    padding-left: 20px;
	color: black;
	font-size: 15px;
}
</style>
</head>
<body>
	<div id="example1">
	
	<form action="logout.php" method="post">
	<input type="hidden" name="regno" id="hiddenField" value="<?php $_SESSION["regno"] ?>" />
	<input type="submit" class="button button1" name="logout" value="Logout">	
	</form>
	<h2>Dashboard</h2>
		<div class="topnav">
		<a href="/scripts/listall.bat" style="width: 23.75%">Create/Update List</a>
		<a href="/scripts/upload.php" style="width: 23%">Upload List</a>
		<a href="/scripts/files.php" style="width: 23%">Search & Download</a>
		<a href="/chat/index.php" style="width: 23%">Chatroom</a>
	</div>
	</div>
	<div id="forum">
	<form action="forum_post.php" method="post">
		<textarea name="comment" style="width:97%; height: 70px;" maxlength="300"></textarea>
		<input type="hidden" name="regno" value="<?php echo $_SESSION["regno"]?>" />
		<input type="submit" style="float: left; width: 97%;" class="button button1" name="submit" value="submit">
	</form>
	<br><br><br><br>
		<?php echo nl2br( file_get_contents('forum.txt') );?>
	
	</div>
	<div class="rightcolumn">
		<iframe src="/chat/online.php"  width=100% height="110" style="display:block;border: none; height:100%">
			<p>Your browser does not support iframes.</p>
		</iframe>
	</div>
</body>
</html>