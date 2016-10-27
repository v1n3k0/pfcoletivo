<?php include_once("../header.php") ?>
<?php include_once("../validar.php") ?>

<div class="mensagme text-center col-md-12">
	<?php 

	if(isset($_GET['error']))
	{
		?> 
			<p class="bg-danger" style="color:red"><?php echo $_GET['error'] ?></p>
		<?php
	} 
	else if(isset($_GET['success']))
	{
		?> 
			<p class="bg-success" style="color:green"><?php echo $_GET['success'] ?></p>
		<?php
	}


	?>
</div>

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
	 <div class="row col-md-12 col-md-offset-0">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Consulta Projeto Candidato</h3>
			</div>
			<div class="panel-body">
			<form class="form-horizontal" method="GET" action="busProjCan.php" >
					<div class="form-group">
					    <label class="row col-md-3 control-label">Busca por categoria</label>
						<div class="col-md-9">
							<select class="form-control" name="categoria">
									<option value="Default">Selecionar Opção</option> 
									<option value="Pesquisa">Pesquisa</option> 
									<option value="Competição Tecnológica">Competição Tecnológica</option> 
									<option value="Inovação no Ensino">Inovação no Ensino</option> 
									<option value="Manutenção e Reforma">Manutenção e Reforma</option> 
									<option value="Pequenas Obras">Pequenas Obras</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="row col-md-3 control-label">Busca por codigo / nome</label>
						<div class="col-md-9">
						   	<input type="text" class="form-control" name="codigo" placeholder="Codigo ou nome">
						</div>
					</div>
					<div class="col-md-2 col-md-offset-10">
						<button type="submit" class="btn btn-default">Consultar</button>
					</div>
			</form>
			</div>
		</div>
	</div>
</div>
<div class="row ">
	<div class="col-md-12 col-md-offset-0">
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
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->nome_p ?></a></span></td>
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->categoria ?></a></span></td>
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->valor ?></a></span></td>
							<td><span class="detalhes"><a href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>"><?php echo $projeto->duracao ?></a></span></td>
							<td><a class="btn btn-default" href="dadosProjCan.php?cod=<?php echo $projeto->codigo; ?>" role="button">Alterar</a></td>
						
						</tr>
						
						<?php
					}
					?></table> <?php	
				}else
				{
				?>		
					<p class="bg-info"><b> Nenhum projeto encontrado</b></p>				
				<?php
				}
			}
			?>
		</div>
	</div>
</div>


<?php include_once("../footer.php") ?>
