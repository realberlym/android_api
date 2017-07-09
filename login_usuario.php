<?php

include_once('config.php');

header('Content-Type: application/json; charset=utf-8'); 

$json = file_get_contents('php://input');

$obj  = (array) json_decode($json);

$email = $obj['email'];
$senha = $obj['senha'];


$sql = "select * from users where email = '".$email."' and password = '".$senha."'";

$query = mysql_query($sql);

$row = mysql_num_rows($query);


	if($row == 1){

		$jsonReturn = array("status" => 1, "msg" => "Logado com sucesso");
	}else{

		$jsonReturn = array("status" => 0, "msg" => "Nao existe usuario");
	}

	@mysql_close($conn);
	header('Content-type: application/json');

	echo json_encode($jsonReturn);	
	
?>