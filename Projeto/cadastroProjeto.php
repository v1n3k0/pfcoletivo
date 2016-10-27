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

	<div class="col-md-12 col-md-offset-0">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Cadastrar de Projeto</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="cadastrarProjeto.php" >
					<div class="form-group">
					<label class="col-md-3	 control-label">*Nome do Projeto</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nome" placeholder="Nome do Projeto">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">*Categoria</label>
						<div class="col-md-9">
							<select class="form-control" name="categoria">
									<option value="Pesquisa">Pesquisa</option> 
									<option value="Competição Tecnológica">Competição Tecnológica</option> 
									<option value="Inovação no Ensino">Inovação no Ensino</option> 
									<option value="Manutenção e Reforma">Manutenção e Reforma</option> 
									<option value="Pequenas Obras">Pequenas Obras</option>
							</select>
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">*Duração prevista</label>
						<div class="col-md-9">
						   	<input type="number" class="form-control" name="duracao" placeholder="dias de trabalho">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label" >*Valor Previsto</label>
					    <div class="col-md-9">
						    <div class="input-group">
						    	<div class="input-group-addon">R$</div>
						      	<input type="text" class="form-control" name="valor" placeholder="Valor Total">
						      	<div class="input-group-addon">.00</div>
						    </div>					    	
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-md-8 col-md-offset-3">
						   	<p class="text-danger">(*) campos de preenchimento obrigatório</p>
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-md-2 col-md-offset-10">
					      <button type="submit" class="btn btn-default">Cadastrar</button>
					    </div>
					</div>
				</form>				
			</div>
		</div>
	</div>


	<?php include_once("../footer.php") ?>