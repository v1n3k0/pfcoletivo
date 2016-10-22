<?php 
	session_start();
	if(! isset ($_SESSION["login"])){		
		header("Location:loginUsuario.php?erro=Usuário não logado.");		
	}
 ?>