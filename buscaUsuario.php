<?php include_once("header.php") ?>

<?php 

if(isset($_GET['login']))
{
	$login = $_GET['login'];

	$result = mysqli_query($con, "SELECT * FROM usuario WHERE login = '$login'");
} elseif (isset($_GET['nome']))
{
	$nome = $_GET['nome'];

	$result = mysqli_query($con, "SELECT * FROM usuario WHERE nome = '$nome'");
}
 

?>
	 <div class="col-md-8 col-md-offset-2">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Consultar Usuário</h3>
			</div>
			<div class="panel-body">

				<form class="form-horizontal" method="GET" action="buscaUsuario.php"">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="login">Login usuario</label>
							<input type="text" id="login" name="login" class="form-control" value=<?php if(isset($_GET['login'])) echo $login ?>>
						</div> <br><br><br><br>
						<div class="form-group col-md-6">
							<label for="nome">Nome usuario</label>
							<input type="text" id="nome" name="nome" class="form-control" value=<?php if(isset($_GET['nome'])) echo $nome ?>>
						</div>

						<div class="form-group">
						    <div class="col-md-1 col-md-offset-9">
						    	<button type="submit" class="btn btn-default">Consultar</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
<div class="col-md-12" style="margin-top: 50px">
	<?php 

	if(isset($result))
	{		
		if(mysqli_num_rows($result) > 0)
		{
			while($usuario = mysqli_fetch_object($result))
			{
				?>
				<div class="row" style="margin-bottom: 20px;">
				<div class="col-md-10">
					<span class="detalhes"><b>Login: </b><?php echo $usuario->login ?></span><br>
					<span class="detalhes"><b>Nome: </b><?php echo $usuario->nome ?></span><br>
				</div>
				</div>
				<hr>
				<?php
			}
		}
		else
		{		
			echo "Nenhum usuario encontrado<b></b>";
		}
	}
	?>
</div>


<?php include_once("footer.php") ?>