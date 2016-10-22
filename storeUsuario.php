<?php include_once("conexao.php") ?>

<?php 
	
	$login  = $_POST['login'];
	$senha  = $_POST['senha'];
	$r_senha  = $_POST['repetirSenha'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$pais     = $_POST['pais'];
	$cidade = $_POST['cidade'];
	$estado     = $_POST['estado'];
	$endereco = $_POST['endereco'];
	$dataNascimento = $_POST['dataNascimento'];
	$email = $_POST['email'];
	$financiador = "financiador";
	$status = "ativo";


	if( $senha == $r_senha){
	
		$result = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$cpf'");

		if(mysqli_fetch_array($result))
		{
			header("Location: cadastroUsuario.php?error=Este código já existe");
		}
		else
		{
			$sql = "INSERT INTO usuario (login,senha,nome,cpf,pais,cidade,estado,endereco,data_n,email,tipo,status) VALUES ('$login', '$senha', '$nome', '$cpf', '$pais', '$cidade', '$estado', '$endereco', '$dataNascimento', '$email', '$financiador', '$status')";

			mysqli_query($con, $sql);

			
			header("Location: cadastroUsuario.php?success=Usuario Inserido com sucesso!");
		}
	} else {
		header("Location: cadastroUsuario.php?error=Senhas não conferem");	
	}

?>
