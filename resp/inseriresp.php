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
	<script src="js/jquery/jquery.maskedinput.min.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>

    <title>SCVV - Sistema de Controle de Visitas e Vendas</title>

    <style>
    </style>
</head>
<body class="metro" style="background-color: #ffffff">
<!--    <header class="bg-dark" data-load="header.html"></header> -->

    <div class="">
        <div style="background: url(../../images/b2.jpg) top left no-repeat; background-size: cover; height: 160px;">
        </div>
		
		<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Seja Bem-Vindo: <?php mysqli_set_charset($conn,'UTF8'); echo $dados['nome'];?> | <?php echo $dados['unidade'];?> | <a href="processalogoff.php"><strong>Logout</strong></a>

		</div>
        <div class="container">
		
			<div class="example">
				<nav class="horizontal-menu compact">
					<ul>
						<li><a href="../../principal.php">Home</a></li>
						<li><a href="../buscar.php">Pesquisar Cliente</a></li>
					</ul>
				</nav>
			</div>
			
			<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Preencha os campos abaixo</div>
			<br><br>
				<?php
					include_once("conexao.php");
					$id = $_POST['id'];
					$resultado = mysqli_query($conn, "select * from clientes where id = '$id'");
					$dados_cliente = mysqli_fetch_array($resultado);					
				?>
<!-- FORMULÁRIO DE INSERÇÃO DE CADASTRO -->
				<form id="form 1" name="form 1" method="post" action="processa_cad_resp.php">
<!-- RAZÃO/FANTASIA -->
					<table class="table bordered">
						<div class="right">
							<input type="hidden" name="cliente" id="cliente" value="<?php echo $dados_cliente["id"];?>" size="1"/>
						</div>
						<thead>
							<tr>
								<td>
									Nome Completo
									<div class="input-control text">
										<input type="text" name="nome" id="nome" maxlength="60" placeholder="Nome do Responsável"/>
									</div>
								</td>
								<td>
									Data de Nascimento
									<div class="input-control text" data-role="datepicker" data-week-start="1">
										<input type="text" name="datanasc" id="datanasc">
									</div>
								</td>
								<td>
									Num. Calçado
									<div class="input-control text">
										<input type="text" name="numcalcado" id="numcalcado" maxlength="2" placeholder="Número do calçado"/>
									</div>
								</td>
								<td>
									Função na empresa
									<div class="input-control select">
										<select name="funcao" id="funcao">
											<option>Escolha abaixo</option>
											<option>Proprietário</option>
											<option>Gerente</option>
											<option>Financeiro</option>
											<option>Comprador</option>
											<option>Secretário</option>
											<option>Filho</option>
											<option>Esposa</option>
											<option>Outros</option>
										</select>
									</div>
								</td>
							</tr>	
						</thead>
					</table>
<!-- Contatostelefonicos -->
					<table class="table bordered">
						<thead>
							<tr>
								<td>
									Email
									<div class="input-control text">
										<input type="text" name="email" id="email" maxlength="45" placeholder="Email"/>
									</div>
								</td>
								<td>
									Telefone 01
									<div class="input-control text">
										<input type="text" name="fone1" id="fone1" maxlength="13" placeholder="Telefone 1"/>
									</div>
								</td>
								<td>
									Operadora Telefone 01
									<div class="input-control select">
										<select name="opfone1" id="opfone1">
											<option>Escolha abaixo</option>
											<option>Fixo</option>
											<option>Oi</option>
											<option>Vivo</option>
											<option>Claro</option>
											<option>Tim</option>
										</select>
									</div>
								</td>
								<td>
									Telefone 02
									<div class="input-control text">
										<input type="text" name="fone2" id="fone2" maxlength="13" placeholder="Telefone 2"/>
									</div>
								</td>
								<td>
									Operadora Telefone 02
									<div class="input-control select">
										<select name="opfone2" id="opfone2">
											<option>Escolha abaixo</option>
											<option>Fixo</option>
											<option>Oi</option>
											<option>Vivo</option>
											<option>Claro</option>
											<option>Tim</option>
										</select>
									</div>
								</td>
							</tr>
						</thead>
					</table>
					<p>Observações</p>
					<div class="input-control textarea">
						<textarea name="obs" id="obs" placeholder="Insira aqui as observações"></textarea>
					</div>
<!-- Botao enviar -->
					<div align = "center">
						<button class="large" name="Cadastrar" id="Cadastrar" value="Cadastrar">Cadastrar Responsável/Comprador</button>
					</div>
					<br><br>
				</form>
        </div>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 6px" align="center">
			SCVV - Todos os direitos reservados - V.1.0
		</div>
    </div>
	<script>
		jQuery(document).ready(function(){
			jQuery('#horavisita').mask('99:99'); //hora
			jQuery("#fone1").mask("(99) 99999-9999");
			jQuery("#fone2").mask("(99) 99999-9999");
			//--jQuery("#datanasc").mask("99.99.9999");
		});
	</script>
</body>
</html>