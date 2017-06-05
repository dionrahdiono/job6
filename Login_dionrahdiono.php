<?php session_start(); ob_start(); ?>
<html>
<head>
<title>Contoh Pemakaian Session</title>
</head>
<body>
<?php
	echo"<form action=\"$php_selt\"method=\"post\">";
?>
<pre>
	Silakan Login :
		User :<input type="text" name="user" value="" />
		Sandi :<input type="password" name="sandi" value="" />
				<input type="submit" name="login" value="Login" />
</pre>
</p>
</form>
<?php
	if($_POST['login'])
	{
		$lgnuser="stekom"; $lgnsandi="605";
		
		if(trim($_POST['user'])==$lgnuser and trim($_POST['sandi'])==$lgnsandi)
		{
			ob_end_clean();
			$_SESSION['user']=$_POST['user'];
			$_SESSION['sandi']=$_POST['sandi'];
			header("Location: MenuInternal_DionRahdiono.php");
			exit();
		}
	}
?>
</body>
</html>