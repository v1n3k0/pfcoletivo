<?php include_once("header.php") ?>

<?php 

$cod= $_GET['cod'];

$result = mysqli_query($con, "SELECT * FROM projeto WHERE codigo = '$cod'");

 

?>
	 
<div class="row col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Dados do projeto candidato</h3>
		</div>
		<?php 
		if(isset($result))
		{		
			if(mysqli_num_rows($result) > 0)
			{
			
				?><table class="table table-striped">
						<tr>
							<td><b>Codigo</b></td>
							<td><b>Nome</b></td>
							<td><b>Categoria</b></td>
							<td><b>Duração prevista</b></td>
							<td><b>Valor previsto</b></td>
							<td><b>Status</b></td>
							
						</tr>
				<?php
				while($projeto = mysqli_fetch_object($result))
				{
				?>					
					<td><span class="detalhes"><?php echo $projeto->codigo ?></a></span><br></td>
					<td><span class="detalhes"><?php echo $projeto->nome_p ?></a></span><br></td>
					<td><span class="detalhes"><?php echo $projeto->categoria ?></a></span><br></td>
					<td><span class="detalhes"><?php echo $projeto->duracao ?></a></span><br></td>
					<td><span class="detalhes"><?php echo $projeto->valor ?></a></span><br></td>
					<td><span class="detalhes"><?php echo $projeto->status ?></a></span><br></td>
					
				<?php
				}
				?></table> <?php	
			}else
			{		
				echo "Nenhum projeto encontrado<b></b>";
			}
		}
		?>
	</div>
</div>


<?php include_once("footer.php") ?>