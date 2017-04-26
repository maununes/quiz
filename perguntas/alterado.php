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

			
?>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="http://www.apsinformatica.com.br/wordpress/wp-content/themes/apsinformatica/favicon.ico" type="image/x-icon">

    <link href="../css/metro-bootstrap.css" rel="stylesheet">
    <link href="../css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/iconFont.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet">
    <link href="../js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="../js/jquery/jquery.min.js"></script>
    <script src="../js/jquery/jquery.widget.min.js"></script>
    <script src="../js/jquery/jquery.mousewheel.js"></script>
    <script src="../js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="../js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="../js/docs.js"></script>
    <script src="../js/github.info.js"></script>

    <title>SiCA - Sistema Integrado de Colaborações Acadêmicas</title>

</head>
<body class="metro" style="background-color: #ffffff">
<!--    <header class="bg-dark" data-load="header.html"></header> -->

    <div class="">
        <div style="background: url(../images/b2.jpg) top left no-repeat; background-size: cover; height: 160px;">
        </div>		
	
		<br>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Quiz Design | <a href="processalogoff.php"><strong>Logout</strong></a>
		</div>
        <div class="container">
			
			<?php
				include_once("conexao.php");
				mysqli_set_charset($conn,'UTF8');
				//REBENDO OS DADOS
				$idpergunta = $_POST['idpergunta'];
				$pergunta = $_POST['pergunta'];
				$ativa = $_POST['ativa'];
				$resp1 = $_POST['resp1'];
				$resp2 = $_POST['resp2'];
				$resp3 = $_POST['resp3'];
				$resp4 = $_POST['resp4'];
				$respcor = $_POST['respcor'];
				date_default_timezone_set('America/Recife');
				$dtcad = date("Y/m/d");
				$usercad= $_POST['iduser'];
				if ($respcor == 1){
				$respcor = $resp1;
				}
				if ($respcor == 2){
					$respcor = $resp2;
				}
				if ($respcor == 3){
					$respcor = $resp3;
				}
				if ($respcor == 4){
					$respcor = $resp4;
				}
				$sql =mysqli_query($conn,"
					update cad_perguntas set
					pergunta='$pergunta', ativa='$ativa', resp1='$resp1', resp2='$resp2', resp3='$resp3', resp4='$resp4',
					respcor='$respcor',	usercad='$usercad', dtcad='$dtcad' where id='$idpergunta'");
				?>
			<p align="center"><strong>Alteração de cadastro realizada com sucesso!</strong><br><br></p>
			
			
        </div>
		<br><br>
		<div align="center">	
			<a href="buscar.php"><button class="large">Voltar para a lista de perguntas</button></a>
		</div>
		<br><br><br>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 6px" align="center">
			Quiz - Todos os direitos reservados - V.1.0
		</div>

    </div>


</body>
</html>