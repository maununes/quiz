<?php
// /* esse bloco de codigo em php verifica se existe a sessao, pois o usuario pode simplesmente nao fazer o login e digitar na barra de endereco do seu navegador o caminho para a pagina principal do site (sistema), burlando assim a obrigacao de fazer um login, com isso se ele nao estiver feito o login nao sera criado a session, entao ao verificar que a session nao existe a pagina redireciona o mesmo para a index.php. */
// session_start();
// // Controlando o tempo de sess�o
// if ( isset( $_SESSION['sessiontime'] ) ) {
	// if ($_SESSION['sessiontime'] < time() ) { 
		// session_unset();
		// header('location:../index.php');
	// }else{
		// $_SESSION['sessiontime'] = time() + 7200;
	// }
// }else{
	// session_unset();
	// header('location:../index.php');
// }
// // Fim do controle de tempo da sess�o
// if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
	// unset($_SESSION['login']);
	// unset($_SESSION['senha']);
	// header('location:../index.php');
// }
// $logado = $_SESSION['login'];
include_once("conexao.php");
//$resultado = mysqli_query($conn, "select * from usuario where login = '$logado'");
//$dados = mysqli_fetch_array($resultado);
mysqli_set_charset($conn,'UTF8');
?>
<html>
<head>

    <meta charset="UTF-8">
    
	<link rel="icon" href="http://www.apsinformatica.com.br/wordpress/wp-content/themes/apsinformatica/favicon.ico" type="image/x-icon">
    <link href="../css/metro-bootstrap.css" rel="stylesheet">
    <link href="../css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/iconFont.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet">
    <link href="../js/prettify/prettify.css" rel="stylesheet">
	<script src="../js/jquery/jquery.min.js"></script>
    <script src="../js/jquery/jquery.widget.min.js"></script>
    <script src="../js/jquery/jquery.mousewheel.js"></script>
	<script src="../js/jquery/jquery.maskedinput.min.js"></script>
    <script src="../js/prettify/prettify.js"></script>
	<script src="../js/load-metro.js"></script>
	<script src="../js/docs.js"></script>
    <script src="../js/github.info.js"></script>
	<script src="../js/metro-calendar.js"></script>
	<script src="../js/metro-datepicker.js"></script>

	 <script src="https://cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
    <title>Quiz</title>

    <style>
    </style>
</head>
<body class="metro" style="background-color: #ffffff">
<?php
mysqli_set_charset($conn,'UTF8');
?>   
   <div class="">
	<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Quiz Design | <a href="processalogoff.php"><strong>Logout</strong></a>
		</div>
        <div class="container">
		
			<div class="example">
				<nav class="horizontal-menu compact">
					<ul>
						<li><a href="../principal.php">Home</a></li>
						<li><a href="buscar.php">Listar Perguntas</a></li>
					</ul>
				</nav>
			</div>
			<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Preencha os campos abaixo</div>
			<br><br>
				<form id="form1" name="form1" method="post" action="processa_cad_pergunta.php">
				<div class="example" data-text="Quiz">
					<h2 style="color:blue;"align="center">Cadastro de Perguntas</h2><br><br>
						<table class="table bordered">
							<td align="center">
								<input type="radio" name="ativa" value="1"/> Pergunta Ativa  (Caso a pergunta esteja dispon�vel para sorteio)<br>
								<input type="radio" name="ativa" value="0"/> Pergunta Inativa (Caso a pergunta esteja indispon�vel para sorteio)
							</td>
						</table>
						<table class="table bordered">
						<thead>
								<td>
								<p align="center" style="color:red";>Pergunta</p>
								<br>
								<textarea type="text" name="pergunta" id="pergunta" maxlength="400" placeholder="Pergunta"></textarea>
								<script>CKEDITOR.replace( 'pergunta' );</script>
								</td>
						</thead>
					</table>
					<h2 style="color:blue;" align="center">Respostas </h2>
					<br>
				<table class='table bordered'>
				<form id="form 1" name="form 1" method="post" action="processa_cad_user.php">
					<tr>
						<td>
							<p style="color:blue" align="center";>Resposta 1</p> 
							<div class="input-control textarea">
								<textarea type="text" name="resp1" id="resp1" maxlength="400"></textarea>
								<script>CKEDITOR.replace( 'resp1' );</script>
								
							</div>
						</td>
						<td>
						<p style="color:blue" align="center";>Resposta 2</p> 
							<div class="input-control textarea">
								<textarea type="text" name="resp2" id="resp2" maxlength="400"></textarea>
								<script>CKEDITOR.replace( 'resp2' );</script>
								
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<p style="color:blue" align="center";>Resposta 3</p> 
							<div class="input-control textarea">
								<textarea type="text" name="resp3" id="resp3" maxlength="400"></textarea>
								<script>CKEDITOR.replace( 'resp3' );</script>
								
							</div>
						</td>
						<td>
							<p style="color:blue" align="center";>Resposta 4</p> 
							<div class="input-control textarea">
								<textarea type="text" name="resp4" id="resp4" maxlength="400"></textarea>
								<script>CKEDITOR.replace( 'resp4' );</script>
								
							</div>
						</td>
				</tr>
				</table>
				<h2 style="color:blue;" align="center">Resposta Correta </h2><br>
				<table class="table bordered">
						<thead>
							<tr>							
								<td align="center"><input type="radio" name="respcor" value="1"/> Resposta 1</td>
								<td align="center"><input type="radio" name="respcor" value="2"/> Resposta 2</td>
								<td align="center"><input type="radio" name="respcor" value="3"/> Resposta 3</td>
								<td align="center"><input type="radio" name="respcor" value="4"/> Resposta 4</td>
							</tr>
						</thead>
				</table>
					<div align = "center">
						<!--<input type="hidden" name="usuario_id" id="usuario_id" value="<?php echo $dados['id'];?>" size="1"/>-->
						<input type="button" class="large" name="Cadastrar" id="Cadastrar" value="Cadastrar Pergunta" onClick = "document.form1.submit()"></button>
					</div>
					<br><br>
				</div>
				</form>
        </div>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 6px" align="center">
			Quiz - Todos os direitos reservados - V.1.0.0.0
		</div>
    </div>
</body>
</html>