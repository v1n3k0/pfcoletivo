<?php include_once("../conexao.php") ?>

<?php 
	
	if(isset($_GET['codigo']))
		$cod = $_GET['codigo'];
	if(isset($_GET['cri']))
		$cod_cri = $_GET['cri'];

	
	if(isset($_POST['url']))
	{		
		$url  = $_POST['url'];
		if($url != NULL){
			mysqli_query($con, "UPDATE projeto set video='$url' where codigo='$cod'");
			header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
		}
	}
	if(isset($_POST['nome'])){	
		$nome  = $_POST['nome'];
		if($nome != NULL)
		{
			mysqli_query($con, "UPDATE projeto set nome_p='$nome' where codigo='$cod'");
			header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
		}
	}
	if(isset($_POST['categoria']))
	{		
		$categoria  = $_POST['categoria'];
		if($categoria != NULL){
			mysqli_query($con, "UPDATE projeto set cod_cat_fk='$categoria' where codigo='$cod'");
			header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
		}
	}
	if(isset($_POST['duracao']))
	{		
		$duracao     = $_POST['duracao'];
		if($duracao != NULL){
			mysqli_query($con, "UPDATE projeto set duracao='$duracao' where codigo='$cod'");
			header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
		}
	}
	if(isset($_POST['valor']))		
	{
		$valor  = $_POST['valor'];
		if($valor != NULL){
			mysqli_query($con, "UPDATE projeto set valor='$valor' where codigo='$cod'");
			header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
		}
	}
	if(isset($_POST['descricao']))		
	{
		$desc = $_POST['descricao'];	
		if($desc != NULL){
			mysqli_query($con, "UPDATE projeto set descricao='$desc' where codigo='$cod'");
			header("Location: dadosProjCan.php?cod=$cod&success=Dados alterados com sucesso!");
		}
	}

	if(isset($_POST['nota']))		
	{
		if(isset($_POST['desc_nota']))
			$desc_nota = $_POST['desc_nota'];
		$nota = $_POST['nota'];
		if($nota != NULL){
				
			#		mysqli_query($con, "UPDATE critproj set nota='$nota', comentario= '$desc_nota' where cod_p_fk='$cod' and cod_cri_fk='$cod_cri'");
			#		header("Location: avaliarProj.php?cod=$cod&success=Avaliação realizada com sucesso!");
			#		exit();	
				
				mysqli_query($con, "INSERT INTO critproj (cod_cri_fk, cod_p_fk, nota, comentario) VALUES ('$cod_cri', '$cod', '$nota', '$desc_nota')");
				//exit();
				header("Location: avaliarProj.php?cod=$cod&success=Avaliação realizada com sucesso!");
		}
	}
	
	$var = "<script>javascript:history.back(-1)</script>";
	echo $var;

	
		

?> 	