<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>
	<form method="GET" action="index.php">
		<select name="menu"> 
			<option value="index">Home</option>
			<option value="sobre">Sobre</option>
			<option value="habilidades">Habilidades</option>
			<option value="contatos">Contatos</option>
			<option value="painel">Painel</option>
		</select>
		<input type="submit">
	</form>
	<a href="logout.php"><button> Sair </button></a>
</body>
</html>

<?php 

if(isset($_GET['menu'])) {
	require_once (__DIR__ . '/' . $_GET['menu'] . '.php');
}
if(isset($_SESSION['name'])) {
	echo 'Bem Vindo Sr. ' . $_SESSION["name"] . '<br>'; 
	echo 'E-mail = ' . $_SESSION["email"]; 
}
?> 
