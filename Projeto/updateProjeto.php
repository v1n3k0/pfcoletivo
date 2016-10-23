<?php include_once("../conexao.php") ?>

<?php 
	
	session_start();

	$cod = $_SESSION["codigo"];
	$nome  = $_POST['nome'];
	$categoria  = $_POST['categoria'];
	$duracao     = $_POST['duracao'];
	$valor  = $_POST['valor'];
	

	
	if($nome != NULL){
		mysqli_query($con, "UPDATE projeto set nome_p='$nome' where codigo='$cod'");
		header("Location: busProjCan.php?success=Dados alterados com sucesso!");
	}	
	if($categoria != NULL){
		mysqli_query($con, "UPDATE projeto set categoria='$categoria' where codigo='$cod'");
		header("Location: busProjCan.php?success=Dados alterados com sucesso!");
	}	
	if($duracao != NULL){
		mysqli_query($con, "UPDATE projeto set duracao='$duracao' where codigo='$cod'");
		header("Location: busProjCan.php?success=Dados alterados com sucesso!");
	}	
	if($valor != NULL){
		mysqli_query($con, "UPDATE projeto set valor='$valor' where codigo='$cod'");
		header("Location: busProjCan.php?success=Dados alterados com sucesso!");
	}	

?>