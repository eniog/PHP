<?php
session_start();

if(!isset($_SESSION['udanarejestracja']))
{
	header('Location:index.php');
	exit();
}
else{
	unset($_SESSION['udanarejestracja']);
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>
<h2>Dziękujemy za rejestrację ! Możesz juz zalogować się na swoje konto</h2><br>
<a href="index.php">Zaloguj się na swoje konto !</a><br><br>

<br>

</body>
</html>