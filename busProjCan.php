<?php include_once("header.php") ?>
<?php include_once("validar.php") ?>

<?php

if(isset($_GET['categoria']))
{	
	$cat = $_GET['categoria'];
	$result = mysqli_query($con, "SELECT * FROM projeto where categoria = '$cat'");				
	if ($cat == "Default"){
		if(isset($_GET['codigo'])){
				$cod = $_GET['codigo'];
				$result = mysqli_query($con, "SELECT * FROM projeto where codigo = '$cod' or nome_p like'%$cod%'");
		}
	}

}


?>
<div class="row">
	 <div class="row col-md-8 col-md-offset-2">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Consulta Projeto Candidato</h3>
			</div>
			<div class="panel-body">
			<form class="form-horizontal" method="GET" action="busProjCan.php" >
					<div class="form-group">
					    <label class="row col-md-4 control-label">Busca por categoria</label>
						<div class="col-md-8">
							<select class="form-control" name="categoria">
									<option value="Default">Selecionar Valor</option> 
									<option value="Pesquisa">Pesquisa</option> 
									<option value="Competição Tecnológica">Competição Tecnológica</option> 
									<option value="Inovação no Ensino">Inovação no Ensino</option> 
									<option value="Manutenção e Reforma">Manutenção e Reforma</option> 
									<option value="Pequenas Obras">Pequenas Obras</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="row col-md-4 control-label">Busca por codigo / nome</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" name="codigo" placeholder="Codigo ou nome">
						</div>
						<div class="col-md-8">
							<button type="submit" class="btn btn-default">Consultar</button>
						</div>
					</div>
			</form>
			</div>
		</div>
	</div>
</div>
<div class="row ">
	<div class="col-md-10 col-md-offset-1">
			<?php 
			$aux =0;
			if(isset($result))
			{		
				if(mysqli_num_rows($result) > 0)
				{
				
					?>
					
					<div class="panel panel-primary">
		  			<div class="panel-heading">Resultado</div>
					<table class="table table-striped">
							<tr>
								<td><b>Nome </b></td>
								<td><b>Categoria</b></td>
								<td><b>Custo Estimado </b></td>
								<td><b>Duração Estimada</b></td>
							
							</tr>
					<?php
					while($projeto = mysqli_fetch_object($result))
					{
						?>
						<tr>
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->nome_p ?></a></span><br></td>
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->categoria ?></a></span><br></td>
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->valor ?></a></span><br></td>
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->duracao ?></a></span><br></td>
						
						</tr>
						
						<?php
					}
					?></table> <?php	
				}else
				{		
					echo "Nenhum projeto encontrado<b></b>";
				}
			}
			?>
		</div>
	</div>
</div>


<?php include_once("footer.php") ?>