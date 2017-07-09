<?php

include_once('config.php');

header('Content-Type: application/json; charset=utf-8'); 

$json = file_get_contents('php://input');

$obj  = (array) json_decode($json);



$email = $obj['email']; 
$senha = $obj['senha'];


$sql = "INSERT INTO `tuts_rest`.`users` (`ID`, `email`, `password`) VALUES (NULL, '$email', '$senha');";
	$query = mysql_query($sql);


	if($query){

		$jsonPrint = array("status" => 1, "msg" => "Adicionado com sucesso");

	}else{

		$jsonPrint = array("status" => 0, "msg" => "Erro ao adicionar");
	}


    @mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($jsonPrint);
?>