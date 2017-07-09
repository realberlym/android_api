<?php 

include_once('config.php');

$user_name = $_POST["nome"];
$user_email = $_POST["email"];
$user_pass = $_POST["senha"];

$sql = "INSERT INTO `users`(`ID`, `name`, `email`, `password`, `status`) VALUES (NULL,'".$user_name."','".$user_email."','".$user_pass."','liberado')";


$query = mysql_query($sql);

if($query){

	echo "Criada com sucesso";

}else{
	echo "Erro ao adicionar";	
}

@mysql_close($conn);



?>