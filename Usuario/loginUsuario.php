<?php include_once("../header_sub.php") ?>

<link rel="stylesheet"  href="../css/bootstrap.css">
<link rel="stylesheet"  href="../css/bootstrap-theme.css">
		<?php 
			if( isset($_GET["erro"]) ) {
				$erro = $_GET["erro"];
				echo "<CENTER> <FONT color='red'>$erro</FONT></CENTER>";
			}
		 ?>

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

    	<div class="row col-md-6 col-md-offset-3">
	        <div align="center" class="panel panel-primary">
		        <div class="panel-heading">
		        	<h3 class="panel-title"> Entrar no UNIFunda </h3>
		        </div>	        
		        <div class="panel-body">
			        <form class="form-horizontal" method="POST" action="Usuario/validaUsuario.php">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-md-2 col-md-offset-1 control-label">Login</label>
					    <div class="col-md-7">
					      <input type="text" class="form-control" name="login" placeholder="Nickname">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-md-2 col-md-offset-1 control-label">Senha</label>
					    <div class="col-md-7">
					      <input type="password" class="form-control" name="senha" placeholder="Senha">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-md-offset-3 col-md-2">
					      <button type="submit" class="btn btn-default">Entrar</button>
					    </div>
					    <div class="col-md-2">					    	
					      <a class="btn btn-default" href="Usuario/cadastroUsuario.php" role="button">Cadastrar</a>
					    </div>
					  </div>
					</form>
		        </div>
	        </div>
    	</div>
<?php include_once("../footer_sub.php") ?>