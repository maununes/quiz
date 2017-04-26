<?php
	include_once("conexao.php");

	$result = mysqli_query($conn,"SELECT * FROM cad_perguntas where ativa = 1 ORDER BY rand() LIMIT 20");
	$rows = array();
	while($r = mysqli_fetch_assoc($result)) {
     $rows['dados'][] = $r;
   }
	header('Content-Type: application/json');
	print json_encode($rows);
?>