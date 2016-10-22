<?php include_once("conexao.php") ?>

<?php 
	
	$login  = $_POST['login'];
	$senha  = $_POST['senha'];


	
		$result = mysqli_query($con, "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'");

		if(mysqli_fetch_array($result))
		{
			$usuario = mysqli_fetch_object($result);
				$cpf = $usuario->cpf;
				$nome = $usuario->nome;
				session_start();
				$_SESSION["cpf"] = $cpf;
				$_SESSION["nome"] = $nome;
				
			
			header("Location: index.php");
		}
		else
		{
			header("Location: loginUsuario.php?error=Usuario e/ou senha inválidos!");
		}

?>
