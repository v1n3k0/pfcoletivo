<?php 

// mysql_connect("localhost", "root", "");
// mysql_selectdb("imdb");


$con = mysqli_connect("localhost", "root", "root");

if(!$con)
{
	die("Falha na conexão com o banco");
}

mysqli_select_db($con, "imdb");

?>