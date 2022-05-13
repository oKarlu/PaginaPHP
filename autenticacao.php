==================================
ESSE TRECHO DEVE SER INSERIDO EM TODAS AS PÁGINAS QUE SE QUEIRA PROTEGER PARA PERMITIR SOMENTE USUÁRIOS AUTENTICADOS NO LOGIN
======================================

<?php

session_start();

if (empty($_SESSION['login'])){
	header ('Location: form_login.htm');
	exit();
}




echo "<p>Bem vindo, ".$_SESSION['login']."</p><br>";
echo "<a href='sair.php'>Sair</a>";
?>