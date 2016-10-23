<?php include_once("../header_sub.php") ?>

<div class="mensagme text-center">
	<?php 

	if(isset($_GET['error']))
	{
		?> 
			<span style="color:red"><?php echo $_GET['error'] ?></span>
		<?php
	} 
	else if(isset($_GET['success']))
	{
		?> 
			<span style="color:green"><?php echo $_GET['success'] ?></span>
		<?php
	}


	?>
</div>

<?php 

$cod= $_GET['cod'];
$_SESSION["codigo"] = $cod;

$result = mysqli_query($con, "SELECT * FROM projeto WHERE codigo = '$cod'");

?>
<div class="row">
	<div class="row col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Dados do projeto candidato</h3>
			</div>
			<?php 
			if(isset($result))
			{		
				if(mysqli_num_rows($result) > 0)
				{
				
					?><table class="table table-striped">
							<tr>
								<td><b>Codigo</b></td>
								<td><b>Nome</b></td>
								<td><b>Categoria</b></td>
								<td><b>Duração prevista</b></td>
								<td><b>Valor previsto</b></td>
								<td><b>Status</b></td>
								
							</tr>
					<?php
					if($projeto = mysqli_fetch_object($result))
					{
					?>					
						<td><span class="detalhes"><?php echo $projeto->codigo ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->nome_p ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->categoria ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->duracao ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->valor ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->status ?></span></td>
						
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

<?php 

$result = mysqli_query($con, "SELECT * FROM projeto WHERE codigo = '$cod'");

?>

<div class="row">
	<div class="row col-md-7">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Alterar dados do projeto</h3>
			</div>			
			<div class="panel-body">
				<?php 
				if(isset($result))
				{		
					if(mysqli_num_rows($result) > 0)
					{
				?>
				<form class="form-horizontal" method="POST" action="updateProjeto.php">
					<?php
					if($projeto = mysqli_fetch_object($result))
					{
					?>
						<div class="form-group">
							<label class="col-md-3 control-label">Nome</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="nome" placeholder=<?php echo $projeto->nome_p ?>>
							</div>
						</div>
						<div class="form-group">
						    <label class="col-md-3 control-label">Categoria</label>
							<div class="col-md-8">
								<select class="form-control" name="categoria">
										<option value=<?php echo $projeto->categoria ?>><?php echo $projeto->categoria ?></option>
										<option value="Pesquisa">Pesquisa</option> 
										<option value="Competição Tecnológica">Competição Tecnológica</option> 
										<option value="Inovação no Ensino">Inovação no Ensino</option> 
										<option value="Manutenção e Reforma">Manutenção e Reforma</option> 
										<option value="Pequenas Obras">Pequenas Obras</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Duração</label>
							<div class="col-md-8">
								<input type="number" class="form-control" name="duracao" placeholder=<?php echo $projeto->duracao ?>>
							</div>
						</div>
						<div class="form-group">
						    <label class="col-md-3 control-label" >*Valor Previsto</label>
						    <div class="col-md-8">
							    <div class="input-group">
							    	<div class="input-group-addon">R$</div>
							      	<input type="text" class="form-control" name="valor" placeholder=<?php echo $projeto->valor ?>>
							      	<div class="input-group-addon">.00</div>
							    </div>					    	
						    </div>
						</div>
						<div class="form-group">
					    <div class="col-md-2 col-md-offset-7">
					      <button type="submit" class="btn btn-default">Alterar</button>
					    </div>
					</div>
					<?php
					}
					?>
				</form>
				<?php	
					}else
					{		
						echo "Nenhum projeto encontrado<b></b>";
					}
				}
				?>
			</div>
		</div>
	</div>

	<div class="row col-md-4 col-md-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Remover dados do projeto</h3>
			</div>
			<div class="panel-body">
			<form class="form-horizontal text-center" method="POST" action="?codigo='$cod'" >
				<div class="form-group">
					<div class="col-dm-4 col-dm-offset-4">
							Deseja realmente remover o projeto do sistema ?
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-1 col-md-offset-4">
						<button type="submit" class="btn btn-default">Sim</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($_GET['codigo'])){

		$codigo = $_GET['codigo'];

		$sql = "DELETE FROM projeto WHERE codigo = '$codigo'";

		mysqli_query($con, $sql);
				
		header("Location: busProjCan.php?success=Projeto removido com sucesso!");	
	}
 ?>

<?php include_once("../footer_sub.php") ?>