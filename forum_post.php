<html>
<head></head><body>
<?php
		session_start();
		file_put_contents("forum.txt",$_SESSION["regno"]." posted: ".$_POST['comment']."\r\n", FILE_APPEND | LOCK_EX );
		echo '<script type="text/javascript">','myFunc();','</script>';
		header("Location: main_menu.php");
		exit();
?>
<script>
function myFunc() {
    document.getElementById("someid").submit();
	

}
</script>
</body>
</html>