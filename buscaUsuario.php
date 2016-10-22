<?php include_once("header.php") ?>

<?php 

if(isset($_GET['login']))
{
	$login = $_GET['login'];

	$result = mysqli_query($con, "SELECT * FROM usuario WHERE login = '$login'");
} 
if (isset($_GET['nome']))
{
	$nome = $_GET['nome'];

	$result1 = mysqli_query($con, "SELECT * FROM usuario WHERE nome = '$nome'");
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
					    <label class="col-md-4 control-label">Login</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" name="login" placeholder="Nickname">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4 control-label">Nome</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" name="nome" placeholder="Nome usuário">
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
					
						<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->login ?></a></span><br></td>
						<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->nome ?></a></span><br>
					</td>
				</div>
				</div>
				
				<?php
			}
			?></table> <?php	
		}
		elseif (isset($result1)) {
			if(mysqli_num_rows($result1) > 0)
				$aux = 1;
			{
				?><table class="table table-hover">
						<tr>
							<td><b>Login</b></td>
							<td><b>Nome</b></td>
						</tr>
				<?php
				while($usuario = mysqli_fetch_object($result1))
				{
					?>
					<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-10">
							<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->login ?></a></span><br></td>
							<td><span class="detalhes"><a href="dadosUsuario.php?cpf=<?php echo $usuario->cpf; ?>"><?php echo $usuario->nome ?></a></span><br>
						</td>
					</div>
					</div>
					
					<?php
				}
				?></table> <?php	
			}
		}elseif($aux = 0)
		{		
			echo "Nenhum usuario encontrado<b></b>";
		}
	}
	?>
</div>


<?php include_once("footer.php") ?>