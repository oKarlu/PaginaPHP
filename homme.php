<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Horizontal</title>
</head>

<body> </body>

</html>
<?php
 include ('menu.php');
 echo $stylecss;
 echo $div;
 echo "Home";

session_start();

if (empty($_SESSION['login'])){
	header ('Location:form_login.htm');
	exit();
}


?>