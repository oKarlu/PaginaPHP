<?php
	session_start();

	$usuario	=	$_POST['usuario'];
	$senha	=	$_POST['senha'];
	
	include('conecta.php');
	
	$query	=	"SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
	$executa	=	mysqli_query($conn,$query);
	$dados		=	mysqli_fetch_array($executa);
	
	if($dados['usuario'] == ''){
		echo '<script>alert("Acesso não autorizado.");
				location = "form_login.htm";
				</script>';
	}
	else {
		$_SESSION['login'] = $dados['usuario'];
		header('Location:homme.php');
	}
	
	
?>