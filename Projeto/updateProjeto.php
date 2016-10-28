<?php include_once("../conexao.php") ?>

<?php 
	
	$cod = $_GET['codigo'];
	$nome  = $_POST['nome'];
	$categoria  = $_POST['categoria'];
	$duracao     = $_POST['duracao'];
	$valor  = $_POST['valor'];
	$desc = $_POST['descricao'];	

	
	if($nome != NULL){
		mysqli_query($con, "UPDATE projeto set nome_p='$nome' where codigo='$cod'");
		header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
	}	
	if($categoria != NULL){
		mysqli_query($con, "UPDATE projeto set cod_cat_fk='$categoria' where codigo='$cod'");
		header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
	}	
	if($duracao != NULL){
		mysqli_query($con, "UPDATE projeto set duracao='$duracao' where codigo='$cod'");
		header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
	}	
	if($valor != NULL){
		mysqli_query($con, "UPDATE projeto set valor='$valor' where codigo='$cod'");
		header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
	}
	if($desc != NULL){
		mysqli_query($con, "UPDATE projeto set descricao='$desc' where codigo='$cod'");
		header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
	}	

?>