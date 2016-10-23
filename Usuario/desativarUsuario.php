<?php include_once("../header_sub.php") ?>
<?php include_once("../validar.php") ?>

<link rel="stylesheet"  href="../css/bootstrap.css">
<link rel="stylesheet"  href="../css/bootstrap-theme.css">
<div class="text-center">
	<?php 
		if(isset($_GET['success']))
		{
			?> 
				<span style="color:green"><?php echo $_GET['success'] ?></span>
			<?php
		}
	?>
</div>

<div class="col-md-8 col-md-offset-2">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Desativar Usuario</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal text-center" method="POST" action="?confirma=ok" >
					<div class="form-group">
						<div class="col-dm-4 col-dm-offset-4">
							Deseja realmente desativar sua conta do sistema <?php echo($_SESSION["login"]) ?> ?
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-default">Sim</button>
						</div>
						<div class="col-md-2">					    	
					      <a class="btn btn-default" href="index.php" role="button">Não</a>
					    </div>
					</div>
				</form>
			</div>
		</div>
</div>

<?php
	if(isset($_GET['confirma'])){
		$cpf = $_SESSION["cpf"];

		$sql = "UPDATE usuario SET status='desativo' WHERE cpf='$cpf'";

		mysqli_query($con, $sql);
				
		header("Location: Usuario/desativarUsuario.php?success=Usuario desativado com sucesso!");	
	}
 ?>

<?php include_once("../footer_sub.php") ?>