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
// Usuário logado no sistema
$iduser = $dados['id'];
			
?>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">
    <meta name="keywords" content="js, css, metro, framework, windows 8, metro ui">
	<link rel="icon" href="http://www.apsinformatica.com.br/wordpress/wp-content/themes/apsinformatica/favicon.ico" type="image/x-icon">

    <link href="../../css/metro-bootstrap.css" rel="stylesheet">
    <link href="../../css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="../../css/iconFont.css" rel="stylesheet">
    <link href="../../css/docs.css" rel="stylesheet">
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

    <title>SCVV - Sistema de Controle de Visitas e Vendas</title>

</head>
<body class="metro" style="background-color: #ffffff">
<!--    <header class="bg-dark" data-load="header.html"></header> -->

    <div class="">
        <div style="background: url(../../images/b1.jpg) top left no-repeat; background-size: cover; height: 300px;">
            <div class="container" style="padding: 50px 20px">
				<br>
                <h1 class="fg-blue_new">Dunas Representações</h1>
                <h2 class="fg-blue_new">Sistema de Gestão de Clientes</h2>
				<br><h3 class="fg-blue_new">Processamento de cadastro</h3>
				<br><br>
            </div>
        </div>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Dunas Representações de Calçados LTDA</strong></div>
		<br>
		
        <div class="container">
			
			<?php
				include_once("conexao.php");
				
				mysqli_set_charset($conn,'UTF8');
				
				//REBENDO OS DADOS
				//$user_id = $iduser;
				$nome = $_POST['nome'];
				$numcalcado = $_POST['numcalcado'];
				$fone1 = $_POST['fone1'];
				$fone2 = $_POST['fone2'];
				$opfone1 = $_POST['opfone1'];
				$opfone2 = $_POST['opfone2'];
				$email = $_POST['email'];
				$funcao = $_POST['funcao'];
				$obs = $_POST['obs'];

				$clientes_id = $_POST['cliente'];
				
				date_default_timezone_set('America/Recife');
				$dtincluido = date("Y-m-d");
				$datanasc = $_POST['datanasc'];
				
				$arr = explode ('.', $datanasc);
				$datanasc = $arr[2]."-".$arr[1]."-".$arr[0];
				
				$query = "INSERT INTO responsaveis(nome,datanasc,numcalcado,fone1,fone2,opfone1,opfone2,email,funcao,clientes_id,dtincluido,obs) VALUES('$nome','$datanasc','$numcalcado','$fone1','$fone2','$opfone1','$opfone2','$email','$funcao','$clientes_id','$dtincluido','$obs')";
				$sql = mysqli_query($conn, $query);

				?>
			<p align="center"><strong>Cadastramento de responsável realizado com sucesso!</strong><br><br></p>
			
			
        </div>
		<br><br>
		<div align="center">	
			<a href="../../principal.php"><button class="large">Voltar para a tela inicial</button></a>
		</div>
		<br><br><br>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 6px" align="center">
			SCVV - Todos os direitos reservados - V.1.0
		</div>
    </div>


</body>
</html>