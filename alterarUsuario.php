<?php include_once("header.php") ?>
<?php include_once("validar.php") ?>

<?php 
$cpf = $_SESSION["cpf"];

$result = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$cpf'");

 

?>
	 
<div class="col-md-12" style="margin-top: 50px">
	<?php 
	$aux =0;
	if(isset($result))
	{		
		if(mysqli_num_rows($result) > 0)
		{
			
			?>
			<div class="row">
			<h3><b>Dados pessoais</b></h3>
			<table class="table table-hover">
			<?php
			while($usuario = mysqli_fetch_object($result))
			{
				?>
				<div class="row" style="margin-bottom: 20px;">
				<div class="col-md-10">
					<form class="form-horizontal" method="POST" action="updateUsuario.php" >							
						<tr>
							<td><span class="detalhes"><?php echo $usuario->login ?></a></span><br></td>
							<td><input type="text" class="form-control" name="login" placeholder="Login" size="4"></td>
							<td><button type="submit" class="btn btn-default">Atualizar</button></td>
						</tr>
						<tr>
							<td><span class="detalhes"><?php echo "Senha" ?></a></span><br></td>
							<td><input type="password" class="form-control" name="senha" placeholder="Senha" size="4"></td>
							<td><button type="submit" class="btn btn-default">Atualizar</button></td>
						</tr>
						<tr>
							<td><span class="detalhes"><?php echo " Confirmar Senha" ?></a></span><br></td>
							<td><input type="password" class="form-control" name="repetirSenha" placeholder="Confirmar Senha" size="4"></td>
							<td><button type="submit" class="btn btn-default">Atualizar</button></td>
						</tr>
						<tr>
							<td><span class="detalhes"><?php echo $usuario->pais ?></a></span><br></td>
							<td><input type="text" class="form-control" name="pais" placeholder="Brasil" size="4"></td>
							<td><button type="submit" class="btn btn-default">Atualizar</button></td></tr>
						<tr>
							<td><span class="detalhes"><?php echo $usuario->cidade ?></a></span><br></td>
							<td><input type="text" class="form-control" name="cidade" placeholder="Itajuba" size="4"></td>
							<td><button type="submit" class="btn btn-default">Atualizar</button></td>
						</tr>
						<tr>		
							<td><span class="detalhes"><?php echo $usuario->estado ?></a></span><br></td>
							<td>
							<select class="form-control" name="estado">
									<option value="ac">Acre</option> 
									<option value="al">Alagoas</option> 
									<option value="am">Amazonas</option> 
									<option value="ap">Amapá</option> 
									<option value="ba">Bahia</option> 
									<option value="ce">Ceará</option> 
									<option value="df">Distrito Federal</option> 
									<option value="es">Espírito Santo</option> 
									<option value="go">Goiás</option> 
									<option value="ma">Maranhão</option> 
									<option value="mt">Mato Grosso</option> 
									<option value="ms">Mato Grosso do Sul</option> 
									<option value="mg">Minas Gerais</option> 
									<option value="pa">Pará</option> 
									<option value="pb">Paraíba</option> 
									<option value="pr">Paraná</option> 
									<option value="pe">Pernambuco</option> 
									<option value="pi">Piauí</option> 
									<option value="rj">Rio de Janeiro</option> 
									<option value="rn">Rio Grande do Norte</option> 
									<option value="ro">Rondônia</option> 
									<option value="rs">Rio Grande do Sul</option> 
									<option value="rr">Roraima</option> 
									<option value="sc">Santa Catarina</option> 
									<option value="se">Sergipe</option> 
									<option value="sp">São Paulo</option> 
									<option value="to">Tocantins</option> 
							</select>
						</td>
							<td><button type="submit" class="btn btn-default">Atualizar</button></td>
						</tr>
						
						<tr>		
							<td><span class="detalhes"><?php echo $usuario->email ?></a></span><br></td>
							<td><input type="email" class="form-control" name="email" placeholder="email@email.com" size="4"></td>
							<td><button type="submit" class="btn btn-default">Atualizar</button></td>
						</tr>
					</form>
				</div>
				</div>
					
				<?php
			}
			?></table> <?php	
		}
		
	}
	?>
</div>


<?php include_once("footer.php") ?>