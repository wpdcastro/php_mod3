<?php
require_once __DIR__ . '/session.php';

session_destroy();
echo $_SESSION['logoutM']; 


?> 
<a href="index.php"><bottom> Inicio </bottom></a>