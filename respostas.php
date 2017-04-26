<?php
	include_once("conexao.php");

	$data = json_decode(file_get_contents('php://input'), true);
	
	$jogador       = $data["jogador"];
	$nomejogador   = $data["nomejogador"];
	$perguntas = $data["perguntas"];
	$respostas = $data["respostas"];
	
	$sql = "INSERT INTO jogador (jogador, nomejogador) values (".$jogador." , '".$nomejogador."')";
	$result = mysqli_query($conn,$sql);
	
	for ($i = 0; $i < count($respostas); $i++ ){
		$sql = "INSERT INTO cad_respostas (id_pergunta, resp, jogador) values (".$perguntas[$i]['id']." , '".$respostas[$i]."' , '".$jogador."')";
		$result = mysqli_query($conn,$sql);
	}
?>