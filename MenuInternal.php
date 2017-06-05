<?php session_start(); ob_start();
if(!session_is_registered(user) and (!session_is_registered(sandi)))
{
	ob_end_clean();
	header("Location: Login_MuhammadAinulMaruf.php");
	exit();
}
?>
<html>
<head>
<title>Contoh Menu Internal</title>
</head>
<body>
<b>Selamat Datang Di Pengolahan Data Internal</b>
<br><br>
<?php
		echo"User Anda: ".$_SESSION['user']."<br>";
		echo"Sandi Anda: ".$_SESSION['sandi']."<br><br>";
		echo"<form action=\"$php_selt\"method=\"post\">
			<input type=\"submit\" name=\"logout\" value=\"Keluar\">
			</form>";
?>
</body>
</html>
<?php
if($_POST['logout'])
{
	session_destroy();
	ob_end_clean();
	header("Location: Login_MuhammadAinulMaruf.php");
	exit();
}
?>