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

$iduser = $dados['id'];
$unidade = $dados['unidade'];
				
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
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>
	<script src="js/metro-tab-control.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>

    <title>CVV - Controle de Visitas e Vendas</title>

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
						<li><a href="../buscar.php">Buscar Cliente</a></li>
					</ul>
				</nav>
			</div>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center"><strong>Listagem de responsáveis</strong></div>
		<br>
				<?php
					include_once("conexao.php");
					$id = $_POST['id'];
					$id_cliente = $id;
					$resultado = mysqli_query($conn, "select * from clientes where id = '$id'");
					$dados = mysqli_fetch_array($resultado);
				?>
		<p><strong>Listagem dos responsáveis pelo cliente:</strong> <?php echo $dados['fantasia']; ?></p>
			<!-- Listagem dos chamados em aberto -->
			<div class="example">

				<table class="table">
					<thead>
					<tr>
						<th class="text-left">Nome</th>
						<th class="text-left">Dt Nascimento</th>
						<th class="text-left">Num. Calçado</th>
						<th class="text-left">Telefone1</th>
						<th class="text-left">Telefone2</th>
						<th class="text-left">Email</th>
						<th class="text-left">Função</th>
						<th class="text-left">Obs</th>
					</tr>
					</thead>
				<?php
					include_once("conexao.php");
					$resultado = mysqli_query($conn, "select * from responsaveis where clientes_id = '$id_cliente'");
					$x = 0;
						while($dadosresp = mysqli_fetch_array($resultado)){
							$x += 1;			
				?>
					<tbody>
						<tr>
							<form method="post" action="exibecliente.php">
								<td class="right"><?php echo $dadosresp['nome']; ?></td>
								<td class="right">
									<?php
									$arr = explode ('-', $dadosresp['datanasc']);
									$dad = $arr[2].".".$arr[1].".".$arr[0];
									echo $dad;
									?>
								</td>
								<td class="right"><?php echo $dadosresp['numcalcado']; ?></td>
								<td class="right"><?php echo $dadosresp['fone1']; ?> - <?php echo $dadosresp['opfone1']; ?></td>
								<td class="right"><?php echo $dadosresp['fone2']; ?> - <?php echo $dadosresp['opfone2']; ?></td>
								<td class="right"><?php echo $dadosresp['email']; ?></td>
								<td class="right"><?php echo $dadosresp['funcao']; ?></td>
								<td class="right"><?php echo $dadosresp['obs']; ?></td>
								<!-- <td class="right"><input name="id" type="hidden" id="id" value="< ?php echo $dados['id']; ?>" size="1"/><input type="submit" name="Logar" id="logar" value="Ver informações"/></td> -->
							</form>
						</tr>
						<?php
							}
							?>
					</tbody>
							</div>
						</div>
					
					<script>
					    $('.tab-control').tabcontrol();
					</script>
				</table>
				<form method="post" action="inseriresp.php">
				<button class="medium" input name="id" type="hidden" id="id" value="<?php echo $id_cliente ?>"/><input type="submit" name="Logar" id="logar" value="Cadastrar Responsável/Comprador"/>
				</form>
			</div>
		<br><br><br>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 6px" align="center">
			SCVV - Todos os direitos reservados - V.1.0
		</div>
    </div>
</body>
</html>