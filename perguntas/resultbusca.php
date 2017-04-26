<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
<html>
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="http://www.apsinformatica.com.br/wordpress/wp-content/themes/apsinformatica/favicon.ico" type="image/x-icon">

    <link href="../css/metro-bootstrap.css" rel="stylesheet">
    <link href="../css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/iconFont.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet">
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

    <title>SiCA - Sistema Integrado de Colaborações Acadêmicas</title>
</head>

<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
// Conexão com o banco
	include_once("conexao.php");
// Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM  colaborador";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM colaborador WHERE nome like '$nome'";
    }
    sleep(1);
    $result = mysqli_query($conn, $sql);
    $cont = mysqli_affected_rows($conn);
// Verifica se a consulta retornou linhas 
    if ($cont > 0) {
// Atribui o código HTML para montar uma tabela
		?>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center"><strong>Resultado da busca pelo filtro Nome</strong></div>
		<div class="example">
		<table class="table">		
		<thead>
		<tr>
			<th style="text-align: center">Id</th>
			<th style="text-align: center" width="250px">Nome</th>
			<th style="text-align: center" width="70px">Telefone1</th>
			<th style="text-align: center">Instituição</th>
			<th style="text-align: center">Curso</th>
			<th style="text-align: center">Orientador</th>
			
			
		</tr>
		</thead>
		<?php
// Captura os dados da consulta e coloca na tabela HTML
        while ($linha = mysqli_fetch_array($result)) {
		?>
		<tbody>
			<tr>
					<td style="text-align: center"><?php echo $linha["id"]; ?></td>
					<td style="text-align: center"><?php echo $linha["nome"]; ?></td>
					<td style="text-align: center"><?php echo $linha["fone1"]; ?></td>
					<td style="text-align: center"><?php echo $linha["instituicao"]; ?></td>
					<td style="text-align: center"><?php echo $linha["curso"]; ?></td>
					<td style="text-align: center"><?php echo $linha["nome_orientador"]; ?></td>
					<td style="text-align: center">
						<form method="post" action="exibecolaborador.php">
							<input name="id" type="hidden" id="id" value="<?php echo $linha['id']; ?>" size="1"/> <input type="submit" name="Logar" id="logar" value="Ver detalhes"/>
						</form>
					</td>
					
			</tr>
		</tbody>
		</div>
		<?php
        }
    }else{
// Se a consulta não retornar nenhum valor:
		echo "Colaborador inexistente na base de dados!";
    }
}
?>
</html>