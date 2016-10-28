<?php include_once("../header.php") ?>
<?php include_once("../validar.php") ?>

<?php 
	$cod= $_GET['cod'];

	$result = mysqli_query($con, "SELECT * FROM projeto WHERE codigo = '$cod'");

	if(isset($result))
	{
		$projeto = mysqli_fetch_object($result);
 ?>

<div class="row">
	<h1 class="text-center"><strong><?php echo $projeto->nome_p ?></strong></h1>
</div>
<div class="jumbotron">
<div class="container">
	<div class="col-md-8">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="<?php echo $projeto->video ?>"></iframe>
		</div>	
	</div>
	<div class="col-md-4" >
		<div class="row list-group-item" style="background-color: white">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<h3><strong>R$ 500,00*</strong></h3>
				</div>
				<div class="row">
					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
					    60%
					  </div>
					</div>
				</div>			
				<div class="row">
					<dl>
					  <dt>Meta R$: <?php echo $projeto->valor ?></dt>
					  <dd>Campanha: Tudo-ou-nada</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="row list-group-item">
			<div class="col-md-2 col-md-offset-2">					    	
				<a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Apoiar Projeto</a>
			</div>
		</div>
	</div>		
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		 	<div class="panel-heading"><b>Descrição</b></div>
		  	<div class="panel-body">
		    	<p><?php echo $projeto->descricao ?></p>
		  	</div>
		</div>
	</div>
</div>

<?php 
	}else{
		?>
		<p class="bg-info"><b> Nenhum projeto encontrado</b></p>
		<?php
	}
 ?>

<?php include_once("../footer.php") ?>