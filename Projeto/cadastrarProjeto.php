<?php include_once("../conexao.php") ?>

<?php 
	
	session_start();

	$cpf = $_SESSION["cpf"];
	$nome  = $_POST['nome'];
	$categoria  = $_POST['categoria'];
	$duracao  = $_POST['duracao'];
	$valor = $_POST['valor'];
	$status = "candidato";
	$descricao= $_POST['descricao'];
	$video = $_POST['video'];

	
	$result = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$cpf'");

	if(mysqli_fetch_array($result))
	{
		$sql = "INSERT INTO projeto (cpf, nome_p, cod_cat_fk, duracao, valor, status, descricao, video) VALUES ('$cpf', '$nome', '$categoria', '$duracao', '$valor', '$status', '$descricao', '$video')";
		echo($cpf);

		mysqli_query($con, $sql);

		header("Location: cadastroProjeto.php?success=Projeto Inserido com sucesso!");
	}
	else
	{
		header("Location: cadastroProjeto.php?error=CPF inválido!");			
	}
?>