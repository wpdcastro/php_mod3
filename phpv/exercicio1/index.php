<form method="POST">   
	<select name="select">
  		<option value="tecnologias">Tecnologias</option>
  		<option value="trainees">Estagiários</option>
	</select>
	<input type="submit">
</form>


<?php

if(isset($_POST['select'])) {
	require_once(__DIR__ . '/' . $_POST['select'] . '.php'); 
}

?>