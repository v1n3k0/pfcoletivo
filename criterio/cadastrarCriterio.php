<?php include_once("../conexao.php") ?>

<?php 
	
	session_start();

	$nome  = $_POST['nome'];
	$categoria  = $_POST['categoria'];

	
	$result = mysqli_query($con, "SELECT * FROM criterio WHERE nome_cri = '$nome' and cod_cat_fk = '$categoria'");

	if( !mysqli_fetch_array($result) )
	{
		$sql = "INSERT INTO criterio (nome_cri, cod_cat_fk) VALUES ('$nome', '$categoria')";

		mysqli_query($con, $sql);

		header("Location: cadastroCriterio.php?success=Criterio Inserido com sucesso!");
	}
	else
	{
		header("Location: cadastroCriterio.php?error=Criterio já existe!");			
	}
?>