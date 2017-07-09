<?php 
require "config.php";
$user_name = $_POST["email"];
$user_pass = $_POST["senha"];

$sql = "select * from user where email = '".$user_name."' and password = '".$user_pass."'";


$query = mysql_query($sql);


$row = mysql_num_rows($query);

if($row == 1){

		echo "Logado com sucesso";
	}else{

		echo "Não existe usuario ou senha incorreta";
		header("Content-Type: charset=utf-8");
	}

	@mysql_close($conn);

?>