<?php include_once("conexao.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>UNIFunda</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">
	<link rel="stylesheet"  href="../css/bootstrap-theme.css">
</head>
<body>

<?php 
	session_start();
	if(isset ($_SESSION["login"])){
		$login = $_SESSION["login"];
		$cpf = $_SESSION["cpf"];
	}
?>

<div class="container">
	<div class="col-md-10 col-md-offset-1">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="../Home/index.php" class="navbar-brand"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> HOME</a>
					</li>
					<?php 
					if( isset($_SESSION["login"])){ ?>
						<li>
							<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
					         	<ul class="dropdown-menu">
					            <li><a href="../Usuario/buscaUsuario.php">Consultar</a></li>
					            <li><a href="../Usuario/alterarUsuario.php">Alterar</a></li>
					            <li><a href="../Usuario/desativarUsuario.php">Desativar</a></li>
					          </ul>
					        </li>
						</li>
					<?php 
					} 
					?>
					<?php 
					if( isset($_SESSION["login"]) && ( ($_SESSION["tipo"] == "gestor") || ($_SESSION["tipo"] == "avaliador") ) ){ ?>
						<li>
							<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projeto <span class="caret"></span></a>
					         	<ul class="dropdown-menu">
					         	<?php if( $_SESSION["tipo"] == "gestor" ){ ?>
					         	<li><a href="../Projeto/cadastroProjeto.php">Cadastrar</a></li>
					         	<?php } ?>
					            <li><a href="../Projeto/busProjCan.php">Consultar</a></li>
					          </ul>
					        </li>
						</li>
					<?php 
					} 
					?>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<?php if( ! isset($_SESSION["login"])){ ?>
					<li>
						<a href="../Usuario/loginUsuario.php">Entrar</a>
					</li>
					<?php }else{ ?>
					<li>
						<a href="../Usuario/dadosUsuario.php?cpf=<?php echo $cpf ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $login ?></a> 
					</li>
					<li>
						<a href="../sair.php">Sair</a>
					</li>
					<?php } ?>
				</ul>				
			</div>
		</div>
	</nav>
	


	

