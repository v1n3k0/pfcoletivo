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
?>

<div class="container">
	<div class="col-md-10 col-md-offset-1">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="../index.php" class="navbar-brand">HOME</a>
					</li>
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
					<li>
						<li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projeto <span class="caret"></span></a>
				         	<ul class="dropdown-menu">
				         	<li><a href="../Projeto/cadastroProjeto.php">Cadastrar</a></li>
				            <li><a href="../Projeto/busProjCan.php">Consultar</a></li>
				          </ul>
				        </li>
					</li>
				</ul>
				<?php if( ! isset($_SESSION["login"])){ ?>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="../Usuario/loginUsuario.php">Entrar</a>
					</li>
				</ul>
				<?php }else{ ?>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="../sair.php">Sair</a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
	</nav>
	


	

