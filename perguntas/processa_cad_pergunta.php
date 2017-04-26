<html>
<head>
<!-- PROCESSA CAD USER CONSULENTE-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 	<link rel="icon" href="http://www.apsinformatica.com.br/wordpress/wp-content/themes/apsinformatica/favicon.ico" type="image/x-icon">
    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>
    <script src="js/load-metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
    <title>Quiz</title>
</head>
<body class="metro" style="background-color: #ffffff">
    <div class="">
        <div style="background: url(images/logo.jpg) top left no-repeat; background-size: cover; height: 300px;">
            <div class="container" style="padding: 50px 20px">
				<br>
                <h1 class="fg-blue_new">SiCA</h1>
                <h2 class="fg-blue_new">Sistema Integrado de Colaborações Acadêmicas</h2>
				<br><h3 class="fg-blue_new">Processamento de cadastro</h3>
				<br><br>
            </div>
        </div>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 4px" align="center">SiCA- Sistema Integrado de Colaborações Acadêmicas</strong></div>
		<br>
        <div class="container">
			<?php
			include_once("conexao.php");
			mysqli_set_charset($conn,'UTF8');
			//REBENDO OS DADOS
			$pergunta = $_POST['pergunta'];
			$ativa = $_POST['ativa'];
			$resp1 = $_POST['resp1'];
			$resp2 = $_POST['resp2'];
			$resp3 = $_POST['resp3'];
			$resp4 = $_POST['resp4'];
			$respcor = $_POST['respcor'];

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
			echo "insert into cad_perguntas (pergunta,ativa,resp1,resp2,resp3,resp4,respcor,usercad,dtcad) 
								   values ('$pergunta','$ativa','$resp1','$resp2','$resp3','$resp4','$respcor','$usercad','$dtcad')";
			date_default_timezone_set('America/Recife');
			$dtcad = date("Y/m/d");
			$usercad= 1;
			$sql =mysqli_query($conn,"
				insert into cad_perguntas (pergunta,ativa,resp1,resp2,resp3,resp4,respcor,usercad,dtcad) 
								   values ('$pergunta','$ativa','$resp1','$resp2','$resp3','$resp4','$respcor','$usercad','$dtcad')");
			
		?>
			
			<p align="center"><strong>Pegunta inserida no sistema com sucesso!</strong><br><br></p>
		</div>
		<br><br>
		<div align="center">	
			<a href="inserir.php"><button class="large">Cadastrar mais perguntas</button></a>
		</div>
		<br><br><br>
		<div class="container tertiary-text bg-aux fg-white" style="padding: 6px" align="center">
			Quiz - Todos os direitos reservados - V.1.0 - Rafael Lopes - UFRN - DEST - Rafael Cordeiro - Eng. Comp.
		</div>
	</div>
</body>
</html>