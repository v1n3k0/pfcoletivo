<?php include_once("header.php") ?>

<?php 

$cpf = $_GET['cpf'];

$result = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$cpf'");

 

?>
	 
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
						<td><b>Pais</b></td>
						<td><b>Cidade</b></td>
						<td><b>Estado</b></td>
						<td><b>Data de nascimento</b></td>
						<td><b>E-mail</b></td>
						<td><b>Tipo</b></td>
						<td><b>Categoria</b></td>

					</tr>
			<?php
			while($usuario = mysqli_fetch_object($result))
			{
				?>
				<div class="row" style="margin-bottom: 20px;">
				<div class="col-md-10">
					
						<td><span class="detalhes"><?php echo $usuario->login ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->nome ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->pais ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->cidade ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->estado ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->data_n ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->email ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->tipo ?></a></span><br></td>
						<td><span class="detalhes"><?php echo $usuario->categoria ?></a></span><br></td>
						
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
						
							<td><span class="detalhes"><a href="dadosUsuario.php?cpf='$usuario->cpf'"><?php echo $usuario->login ?></a></span><br></td>
							<td><span class="detalhes"><a href="dadosUsuario.php?cpf='$usuario->cpf'"><?php echo $usuario->nome ?></a></span><br>
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