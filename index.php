<?php include_once("header.php") ?>
<?php
session_start();
$nome = $_SESSION["nome"];

	echo ("hahahaha" + $nome);
 ?>

		</div>
	</div>

    	<div align="center" class="row">
    		<div class="col-md-1 col-md-offset-4">
    			<img src="image/LogoEFEI.png" alt="Logo Unifei" class="img-responsive">
    		</div>
    		<div class="col-md-1">
    			<h2 class="text-center">UNIFunda <br><small>UNIFEI</small></h2>
    		</div>
    	</div>

<?php include_once("footer.php") ?>