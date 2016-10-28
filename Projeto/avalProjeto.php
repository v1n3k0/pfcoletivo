<?php include_once("../conexao.php") ?>
<?php 
	if(isset($_GET['codigo'])){
		$cod = $_GET['codigo'];	
	
	$count=0;
	

	$result = mysqli_query($con, "SELECT * FROM projeto WHERE codigo = '$cod'");
	$projeto = mysqli_fetch_object($result);
	$cod_cat = $projeto->cod_cat_fk;
	$criter =  mysqli_query($con, "SELECT * FROM criterio WHERE cod_cat_fk = '$cod_cat'");
	while($criterio = mysqli_fetch_object($criter)){
		$peso = $criterio->peso;
		$cate =  mysqli_query($con, "SELECT * FROM critproj WHERE cod_cri_fk = '$criterio->cod_cri' and cod_p_fk = '$cod'");
		if($categ = mysqli_fetch_object($cate)){
				
			$media = ($peso * $categ->nota) + $media;
			$count = $count + 1*$peso;
		}
	}

		$media= $media / $count;
	if($media < 8){
		mysqli_query($con, "UPDATE projeto set status='reprovado', nota='$media' where codigo='$cod'");
		header("Location: avaliarProj.php?cod=0&error=Projeto reprovado!");
		exit();
	}elseif($media > 7){
		mysqli_query($con, "UPDATE projeto set status='aprovado', nota= '$media' where codigo='$cod'");
		header("Location: avaliarProj.php?cod=0&success=Projeto aprovado!");
		exit();
	}
	
	$var = "<script>javascript:history.back(-2)</script>";
	echo $var;
}
	header("Location: avaliarProj.php?cod=0&error=Projeto não selecionado!");
		
?> 	