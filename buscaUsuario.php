<?php include_once("header.php") ?>

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
	 <div class="col-md-8 col-md-offset-2">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Consultar Usuário</h3>
			</div>
			<div class="panel-body">
			<form class="form-horizontal" method="GET" action="buscaUsuario.php" >
					<div class="form-group">
					    <label class="col-md-4 control-label">Busca</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" name="busca" placeholder="Palavra-chave">
						</div>
					</div>
					<div class="form-group">
							    <div class="col-md-1 col-md-offset-9">
							    	<button type="submit" class="btn btn-default">Consultar</button>
							    </div>
							</div>
					</form>
				</div>
			</div>
		</div>
<div class="col-md-12" style="margin-top: 50px">
	<?php 
	$aux =0;
	if(isset($result))
	{		
		if(mysqli_num_rows($result) > 0)
		{
		
			?><table class="table table-hover">
					<tr>
						<td><b>Login</b></td>
						<td><b>Nome</b></td>
					</tr>
			<?php
			while($usuario = mysqli_fetch_object($result))
			{
				?>
				<div class="row" style="margin-bottom: 20px;">
				<div class="col-md-10">
					<tr>
						<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->login ?></a></span><br></td>
						<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->nome ?></a></span><br>
					</td>
					</tr>
				</div>
				</div>
				
				<?php
			}
			?></table> <?php	
		}else
		{		
			echo "Nenhum usuario encontrado<b></b>";
		}
	}
	?>
</div>


<?php include_once("footer.php") ?>