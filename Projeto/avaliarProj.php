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

if(isset($_GET['cod']))
	$cod=$_GET['cod'];
$_SESSION["codigo"] = $cod;

$result = mysqli_query($con, "SELECT * FROM projeto WHERE codigo = '$cod' and status ='candidato'");

?>
<div class="row">
	<div class="col-md-12">
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
								<td><b>Descrição</b></td>								
							</tr>
					<?php
					if($projeto = mysqli_fetch_object($result))
					{
						if($projeto->cod_cat_fk == 1){
							$categoria_p ="Pesquisa";
						}elseif($projeto->cod_cat_fk == 2){
							$categoria_p ="Competição Tecnológica";
						}elseif($projeto->cod_cat_fk == 3){
							$categoria_p ="Inovação no Ensino";
						}elseif($projeto->cod_cat_fk == 4){
							$categoria_p ="Manutenção e Reforma";
						}elseif($projeto->cod_cat_fk == 5){
							$categoria_p ="Pequenas Obras";
						}
					?>					
						<td><span class="detalhes"><?php echo $projeto->codigo ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->nome_p ?></span></td>
						<td><span class="detalhes"><?php echo $categoria_p ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->duracao ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->valor ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->status ?></span></td>
						<td><span class="detalhes"><?php echo $projeto->descricao ?></span></td>
						
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

<?php 

$result = mysqli_query($con, "SELECT * FROM projeto WHERE codigo = '$cod' and status ='candidato'");

?>

<?php if( $_SESSION["tipo"] == "gestor" ){ ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
  			<div class="panel-heading">Critérios</div>
				<table class="table table-striped">
					<tr>
						<td><b>Nome </b></td>
							<td><b>Peso</b></td>
							<td><b>Descrição </b></td>
							<td><b>Nota</b></td>
							<td><b>Comentário</b></td>
							<td></td>
						</tr>
					<?php
					if($projeto = mysqli_fetch_object($result))
					{
						$cod_cat = $projeto->cod_cat_fk;
						$criter =  mysqli_query($con, "SELECT * FROM criterio WHERE cod_cat_fk = '$cod_cat'");
						while($criterio = mysqli_fetch_object($criter))
						{
					?>
						<tr>
							<td>
								<span class="detalhes"><?php echo $criterio->nome_cri ?></span>
							</td>
							<td>
								<span class="detalhes"><?php echo $criterio->peso ?></span>
							</td>
							<td>
								<span class="detalhes"><?php echo $criterio->descricao ?></span>
							</td>
							<form class="form-horizontal" method="POST" action="updateProjeto.php?codigo=<?php echo $projeto->codigo; ?>&cri=<?php echo $criterio->cod_cri; ?>">
								<td>
										<div class="col-md-12">
											<select class="form-control" name="nota">
												<option value="0">0</option> 
												<option value="1">1</option> 
												<option value="2">2</option> 
												<option value="3">3</option> 
												<option value="4">4</option> 
												<option value="5">5</option>
												<option value="6">6</option> 
												<option value="7">7</option> 
												<option value="8">8</option> 
												<option value="9">9</option> 
												<option value="10">10</option>
										</select>
										</div>
								</td>
								<td>
										<div class="col-md-12">
											<textarea class="form-control" rows="3" name="desc_nota" size=255 placeholder="Descrição da avalicação"></textarea>
										</div>
								<td>
										<div class="col-md-12">
									     <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Salvar</button>
									    </div>
								</td>
							</form>
						</tr>
						
						<?php
						}
					}

					?>	
					</table>
					
				<?php
					
				}else
					{		
					?>		
						<p class="bg-info"><b> Nenhum projeto encontrado</b></p>				
					<?php
					}
				
				?>
			</div>
			<div class="col-md-1 col-md-offset-10">
				<a class="btn btn-primary" href="avalProjeto.php?codigo=<?php echo $projeto->codigo; ?>"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Aprovar</a>
			</div>
		</div>
	</div>
</div>



<?php include_once("../footer.php") ?>