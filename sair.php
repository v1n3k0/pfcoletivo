<?php include_once("header.php") ?>
<?php include_once("validar.php") ?>

<?php 
	session_start();
	session_unset();
	session_destroy();

	header("Location: index.php");
?>

<?php include_once("footer.php") ?>