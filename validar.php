<?php 
	if(! isset ($_SESSION["login"])){		
		header("Location: ../Usuario/loginUsuario.php?erro=Usuário não logado.");		
	}
 ?>