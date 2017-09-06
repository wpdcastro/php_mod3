<?php
if (!empty($_POST['email']) && !empty($_POST['senha'])) {
	if (($_POST['email'] == 'wcastro@traylabs.com.br') && ($_POST['senha'] == 'tray2017')) {
		$_SESSION["name"] = 'William';
		$_SESSION["email"] = $_POST['email']; 
	}
} elseif ($_POST){
	echo $_SESSION['erro']; 
}
?>

<h1> Painel Administrativo</h1><br>
<form method="POST"> 
	E-mail<br>
	<input type="text" name="email" required>
	<br> Senha <br>
	<input type="password" name="senha" required>
	<input type="submit" name="logar">
</form>


