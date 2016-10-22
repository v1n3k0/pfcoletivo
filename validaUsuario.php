<?php include_once("conexao.php") ?>

<?php 
	
	$login  = $_POST['login'];
	$senha  = $_POST['senha'];


	
		$result = mysqli_query($con, "SELECT cpf, login, tipo FROM usuario WHERE login = '$login' and senha = '$senha'") or die("Erro ao pesquisar login" . mysqli_error());

		if($registro = mysqli_fetch_assoc($result))
		{
				$cpf = $registro["cpf"];
				$nome = $registro["login"];
				$tipo = $registro["tipo"];
				session_start();
				$_SESSION["cpf"] = $cpf;
				$_SESSION["nome"] = $nome;
				$_SESSION["tipo"] = $tipo;
				
			
			header("Location: index.php");
		}
		else
		{
			header("Location: loginUsuario.php?error=Usuario e/ou senha inválidos!");
		}

?>
