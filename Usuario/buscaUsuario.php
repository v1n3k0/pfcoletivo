<?php include_once("../header.php") ?>
<?php include_once("../validar.php") ?>

<?php

if(isset($_GET['busca']))
{	
	$busca = $_GET['busca'];
	if ($busca == NULL){
					$result = mysqli_query($con, "SELECT * FROM usuario");	
	}
	elseif(isset($_GET['busca'])){
		$result = mysqli_query($con, "SELECT * FROM usuario WHERE login like '%$busca%' or nome like '%$busca%'");	
	}
}

?>
<div class="row">
	 <div class="row col-md-12 col-md-offset-0">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Consultar Usuário</h3>
			</div>
			<div class="panel-body">
			<form class="form-horizontal" method="GET" action="buscaUsuario.php" >
					<div class="form-group">
						<div class="col-md-1 col-md-offset-0">
					    	<label class="control-label">Busca</label>
						</div>
						<div class="col-md-9">
						   	<input type="text" class="form-control" name="busca" placeholder="Nome ou login">
						</div>
						<div class="col-md-1">
							<button type="submit" class="btn btn-default">Consultar</button>
						</div>
					</div>
			</form>
			</div>
		</div>
	</div>
</div>
<div class="row ">
	<div class="col-md-12 col-md-offset-0">
			<?php 
			
			if(isset($result))
			{		
				if(mysqli_num_rows($result) > 0)
				{
				
					?>
					
					<div class="panel panel-primary">
		  			<div class="panel-heading">Resultado</div>
					<table class="table table-striped">
							<tr>
								<td><b>Login</b></td>
								<td><b>Nome</b></td>
							</tr>
					<?php
					while($usuario = mysqli_fetch_object($result))
					{
						?>
						<tr>
							<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->login ?></a></span><br></td>
							<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->nome ?></a></span><br>
							</td>
						</tr>
						
						<?php
					}
					?></table> <?php	
				}else
				{		
				?>		
					<p class="bg-info"><b> Nenhum usuario encontrado</b></p>				
				<?php
				}
			}
			?>
		</div>
	</div>
</div>


<?php include_once("../footer.php") ?>