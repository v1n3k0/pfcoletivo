<?php include_once("conexao.php") ?>

<?php 
	
	$cpf = $_POST["cpf"];
	$login  = $_POST['login'];
	$senha  = $_POST['senha'];
	$r_senha  = $_POST['repetirSenha'];
	$pais     = $_POST['pais'];
	$cidade = $_POST['cidade'];
	$estado     = $_POST['estado'];
	$email = $_POST['email'];
	

	if( $senha == $r_senha){
		if($login != NULL){
			$result = mysqli_query($con, "UPDATE usuario set login='$login' where cpf='$cpf'");
		}	
		if($senha != NULL){
			$result = mysqli_query($con, "UPDATE usuario set senha='$senha' where cpf='$cpf'");
		}	
		if($pais != NULL){
			$result = mysqli_query($con, "UPDATE usuario set pais='$pais' where cpf='$cpf'");
		}	
		if($cidade != NULL){
			$result = mysqli_query($con, "UPDATE usuario set cidade='$cidade' where cpf='$cpf'");
		}	
		if($estado != NULL){
			$result = mysqli_query($con, "UPDATE usuario set estado='$estado' where cpf='$cpf'");
		}	
		if($email != NULL){
			$result = mysqli_query($con, "UPDATE usuario set email='$email' where cpf='$cpf'");
		}	
			header("Location: alterarUsuario.php?success=Dados alterados com sucesso!");
	} else {
		header("Location: alterarUsuario.php?error=Senhas não conferem");	
	}

?>
