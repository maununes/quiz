<?php
// /* esse bloco de codigo em php verifica se existe a sessao, pois o usuario pode simplesmente nao fazer o login e digitar na barra de endereco do seu navegador o caminho para a pagina principal do site (sistema), burlando assim a obrigacao de fazer um login, com isso se ele nao estiver feito o login nao sera criado a session, entao ao verificar que a session nao existe a pagina redireciona o mesmo para a index.php. */
// session_start();
// // Controlando o tempo de sessão
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
// // Fim do controle de tempo da sessão
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
include_once("conexao.php");
$id = $_POST['id'];
$resultado = mysqli_query($conn,"select * from cad_perguntas where id='$id'");
$dados = mysqli_fetch_array($resultado);						
?>
   <div class="">
	<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Quiz Design | <a href="processalogoff.php"><strong>Logout</strong></a>
		</div>
        <div class="container">
		
			<div class="example">
				<nav class="horizontal-menu compact">
					<ul>
						<li><a href="../principal.php">Home</a></li>
						<li><a href="inserir.php">Inserir Perguntas</a></li>
						<li><a href="buscar.php">Listar Perguntas</a></li>
					</ul>
				</nav>
			</div>
			<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">Preencha os campos abaixo</div>
			<br><br>
				<form id= "form 1" name="form 1" method="post" action="alterado.php">
				<div class="example" data-text="Quiz">
					<h2 style="color:blue;"align="center">Cadastro de Perguntas</h2><br><br>
						<table class="table bordered">
							<td>
							<p><strong>Id: </strong><?php echo $dados['id']; ?>
							</td>
								<?php
									if( $dados['ativa'] == "1"){
								?>
								<td>
								<input type="radio" name="ativa" value="1" checked/>Pergunta Ativa  (Caso a pergunta esteja disponível para sorteio)<br> 
									<input type="radio" name="ativa" value="0"/> Pergunta Inativa  (Caso a pergunta esteja indisponível para sorteio)<br>
								</td>
								<?php
									}else{
								?>
								<td>
									<input type="radio" name="ativa" value="1"/> Pergunta Ativa  (Caso a pergunta esteja disponível para sorteio)<br />
									<input type="radio" name="ativa" value="0" checked/> Pergunta Inativa  (Caso a pergunta esteja indisponível para sorteio)<br>
								</td>
								<?php
									}
								?>
							
						</table>
						<table class="table bordered">
						<thead>
								<td>
								<p align="center" style="color:red";>Pergunta</p>
								<br>
								<textarea type="text" name="pergunta" id="pergunta" maxlength="400"><?php echo $dados['pergunta']; ?></textarea>
								<script>CKEDITOR.replace( 'pergunta' );</script>
								</td>
						</thead>
					</table>
					<h2 style="color:blue;" align="center">Respostas </h2>
					<br>
				<table class='table bordered'>
				
					<tr>
						<td>
							Resposta 1 <br><br>
							<div class="input-control textarea">
								<textarea type="text" name="resp1" id="resp1" maxlength="400"><?php echo $dados['resp1']; ?></textarea>
								<script>CKEDITOR.replace( 'resp1' );</script>
								
							</div>
						</td>
						<td>
							Resposta 2 <br><br>
							<div class="input-control textarea">
								<textarea type="text" name="resp2" id="resp2" maxlength="400"><?php echo $dados['resp2']; ?></textarea>
								<script>CKEDITOR.replace( 'resp2' );</script>
								
							</div>
						</td>
					</tr>
					<tr>
						<td>
							Resposta 3 <br><br>
							<div class="input-control textarea">
								<textarea type="text" name="resp3" id="resp3" maxlength="400"><?php echo $dados['resp3']; ?></textarea>
								<script>CKEDITOR.replace( 'resp3' );</script>
								
							</div>
						</td>
						<td>
							Resposta 4 <br><br>
							<div class="input-control textarea">
								<textarea type="text" name="resp4" id="resp4" maxlength="400"><?php echo $dados['resp4']; ?></textarea>
								<script>CKEDITOR.replace( 'resp4' );</script>
								
							</div>
						</td>
				</tr>
				</table>
				<h2 style="color:blue;" align="center">Resposta Correta </h2><br>
				<table class="table bordered">
						<thead>
							<tr>
							<?php if( $dados['respcor'] == "1"){	?>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp1' );</script>" checked/> Resposta 1</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp2' );</script>"/> Resposta 2</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp3' );</script>"/> Resposta 3</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp4' );</script>"/> Resposta 4</td>
								<?php
								}if( $dados['respcor'] == "2"){
								?>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp1' );</script>" > Resposta 1</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp2' );</script>" checked/> Resposta 2</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp3' );</script>"/> Resposta 3</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp4' );</script>"/> Resposta 4</td>
								<?php
								}if( $dados['respcor'] == "3"){
								?>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp1' );</script>" > Resposta 1</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp2' );</script>"> Resposta 2</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp3' );</script>" checked/> Resposta 3</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp4' );</script>"/> Resposta 4</td>
								<?php
								}if( $dados['respcor'] == "4"){
								?>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp1' );</script>"/> Resposta 1</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp2' );</script>"/> Resposta 2</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp3' );</script>"/> Resposta 3</td>
								<td align="center"><input type="radio" name="respcor" value="<script>CKEDITOR.replace( 'resp4' );</script>" checked/> Resposta 4</td>
								<?php } ?>
							</tr>
						</thead>
				</table>
				
					<div align = "center">
						<input type="hidden" name="iduser" id="iduser" value="1" size="1"/>
						<input type="hidden" name="idpergunta" id="idpergunta" value="<?php echo $dados['id'];?>" size="1"/>
						<input type="submit" name="Cadastrar" id="Cadastrar" value="Submeter Alteração"/>
					</div>
				</form>
					<br><br>
				</div>
				
        </div>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 6px" align="center">
			Quiz - Todos os direitos reservados - Rafael Lopes V.1.0.0.0
		</div>
    </div>
</body>
</html>