<?php
/* esse bloco de codigo em php verifica se existe a sessao, pois o usuario pode simplesmente nao fazer o login e digitar na barra de endereco do seu navegador o caminho para a pagina principal do site (sistema), burlando assim a obrigacao de fazer um login, com isso se ele nao estiver feito o login nao sera criado a session, entao ao verificar que a session nao existe a pagina redireciona o mesmo para a index.php. */
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:../index.php');
}
$logado = $_SESSION['login'];

// Trecho para pegar os dados do usuario que efetuou o login

include_once("conexao.php");			
$resultado = mysqli_query($conn, "select * from usuario where login = '$logado'");
$dados = mysqli_fetch_array($resultado);
$usuario_logado = $dados['id'];
			
?>
<html>
<head>

    <meta charset="utf-8">
      <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
</head>
<body class="metro" style="background-color: #ffffff">
<!--    <header class="bg-dark" data-load="header.html"></header> -->
		<br><br><br><br><br><br>
		<div class="container" align="center";>
            <div class="grid fluid">
                <div class="row">
					<div class="span4 bg-pink padding20 text-center">
                        <a href="perguntas/inserir.php" target="blank"><h2 class="fg-white">Cadastrar Perguntas</h2></a>
                    </div>
                    <div class="span4 bg-yellow padding20 text-center">
                        <a href="consulente/cad_consulente.php"><h2 class="fg-white">Ver Certificados Emitidos</h2></a>
                    </div>
				<div class="span4 bg-red padding20 text-center">
                        <a href="quiz.php" target="blank"><h2 class="fg-white">Jogar!</h2></a>
                    </div>
                    <div class="span4 bg-gray padding20 text-center">
						<a href="agendamento/listaragendamentos.php"><h2 class="fg-white">Estatísticas</h2><h5>
						<?php /*<strong><?php echo $total; ?></strong></h5></a> irá listar todas as reunioes, independente do usuario*/?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>