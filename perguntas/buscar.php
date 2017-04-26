<?php
/* esse bloco de codigo em php verifica se existe a sessao, pois o usuario pode simplesmente nao fazer o login e digitar na barra de endereco do seu navegador o caminho para a pagina principal do site (sistema), burlando assim a obrigacao de fazer um login, com isso se ele nao estiver feito o login nao sera criado a session, entao ao verificar que a session nao existe a pagina redireciona o mesmo para a index.php. */
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
}
$logado = $_SESSION['login'];

// Trecho para pegar os dados do usuario que efetuou o login

include_once("conexao.php");			
$resultado = mysqli_query($conn, "select * from usuario where login = '$logado'");
$dados = mysqli_fetch_array($resultado);
			
?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   	<link rel="icon" href="http://www.apsinformatica.com.br/wordpress/wp-content/themes/apsinformatica/favicon.ico" type="image/x-icon">
    <link href="../css/metro-bootstrap.css" rel="stylesheet">
    <link href="../css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/iconFont.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet">
    <link href="../js/prettify/prettify.css" rel="stylesheet">
    <script src="../js/jquery/jquery.min.js"></script>
    <script src="../js/jquery/jquery.widget.min.js"></script>
    <script src="../js/jquery/jquery.mousewheel.js"></script>
    <script src="../js/prettify/prettify.js"></script>
    <script src="../js/load-metro.js"></script>
    <script src="../js/docs.js"></script>
    <script src="../js/github.info.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
    <style>
    </style>
</head>
<body class="metro" style="background-color: #ffffff">
    <div class="">
	<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Quiz Design | <a href="processalogoff.php"><strong>Logooff</strong></a>
		</div>
    
        <div class="container">
			<div class="example">
				<nav class="horizontal-menu compact">
					<ul>
						<li><a href="../principal.php">Home</a></li>
						<li><a href="inserir.php">Inserir Perguntas</a></li>
					</ul>
				</nav>
			</div>
			<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Listar Perguntas</div>
			<br>
					
		<div class="example">
		<table class="table">		
		<thead>
		<tr>
			<th style="text-align: center" width="30px">Id</th>
			<th style="text-align: center" width="250px">Pergunta</th>
			<th style="text-align: center" width="250px">Respostas</th>
			<th style="text-align: center" width="50px">Detalhar</th>		
		</tr>
		</thead>
		<?php
		 $sql = "SELECT * FROM cad_perguntas ";
		 $result = mysqli_query($conn, $sql);
		 $cont = mysqli_affected_rows($conn);
			if ($cont > 0) {
		// Captura os dados da consulta e coloca na tabela HTML
				while ($linha = mysqli_fetch_array($result)) {
		?>
		<tbody>
			<tr>
					<td style="text-align: center"> Id: <strong><?php echo $linha["id"]; ?></strong>
					<br><br>
					Resposta Correta: <strong><?php echo $linha["respcor"]; ?></strong><br><br>
					<?php if( $linha["ativa"] == 1){
							echo '<p style="color:blue">Pergunta ativa</p>';
						}else{
							echo '<p style="color:red">Pergunta inativa</p>';
							}						
					 ?><br><br>
					 
					 </td>
					<td style="text-align: center"><?php echo $linha["pergunta"]; ?></td>
					<td>
						<p><strong>Resposta 1:</strong><br> <?php echo $linha["resp1"]; ?></p>
						<p><strong>Resposta 2:</strong><br> <?php echo $linha["resp2"]; ?></p>
						<p><strong>Resposta 3:</strong><br> <?php echo $linha["resp3"]; ?></p>
						<p><strong>Resposta 4:</strong><br> <?php echo $linha["resp4"]; ?></p>
					</td>
					<td style="text-align: center">
						<form method="post" action="alterar.php">
							<input name="id" type="hidden" id="id" value="<?php echo $linha['id']; ?>" size="1"/> <input type="submit" name="Logar" id="logar" value="Editar"/>
						</form>
					</td>
			</tr>
		</tbody>
		</div>
		
		<?php
			}
		}else{
			echo "Não há perguntas Cadastradas!";
		}
		?>
		<hr>

        </div>
    </div>
</body>
</html>