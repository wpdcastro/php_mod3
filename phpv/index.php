<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>
	<form method="GET">
		<select name="x"> 
			<option value="index">Home</option>
			<option value="sobre">Sobre</option>
			<option value="habilidades">Habilidades</option>
			<option value="contatos">Contatos</option>
		</select>
		<input type="submit">
	</form>
</body>
</html>

<?php 


if(isset($_GET['x'])) {
	require_once (__DIR__ . '/' . $_GET['x'] . '.php');
}


echo '>>>>> ' . $_SESSION . PHP_EOL;

?> 

