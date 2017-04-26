<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html ng-csp="" ng-app="quizApp"> <!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Quiz - TCC em Design - UM GUIA DE BOAS PRÁTICAS</title>

	<script src="js/angular.min.js"></script>
	<script src="js/main.js"></script>
	<style>
	input[type='radio'] { 
		transform: scale(2); 
		margin-right: 10px;
		color:#333399;
	}
	
	body{
		font-size:20px;
		color:#333399;
		font-family: ‘Lucida Sans Unicode’, ‘Lucida Grande’, sans-serif;
	}
	
	@media print{    
		.no-print, .no-print *
		{
			display: none !important;
		}
	}
	</style>
</head>
<body ng-controller="QuizController" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div ng-if="tela == 'quiz'">
	<!-- Save for Web Slices (Tela-quiz.png) -->
	<table id="Tabela_01" width="1280" height="801" border="0" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td colspan="9">
				<a href="index.html"><img src="imagens_interna/img_01.jpg" width="1280" height="171" alt=""></a></td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="imagens_interna/img_02.jpg" width="511" height="61" alt=""></td>
			<td  colspan="2" style="background: transparent url('imagens_interna/img_02.jpg') no-repeat scroll 0px 0px;" width="235px" height="61px" align="center"><b>Questão {{idPerguntaAtual + 1}}</b></td>
			<td colspan="4">
				<img src="imagens_interna/img_04.jpg" width="534" height="61" alt=""></td>
		</tr>
		<tr>
			<td rowspan="4">
				<img style="height: 585px;" src="imagens_interna/img_05.jpg" width="97" height="568" alt=""></td>
			<td colspan="7">
				<img style="margin-top: -5px; height: 20px;" src="imagens_interna/img_06.jpg" width="1108" height="17" alt=""></td>
			<td rowspan="4">
				<img style="height: 585px;" src="imagens_interna/img_07.jpg" width="75" height="568" alt=""></td>
		</tr>
		<tr>
			<td colspan="7" width="1108px" height="400px">

			<!--CONTEUDO AQUI -->
			<ng-include src="'includes/quiz.html'"></ng-include>
			<!-- FIM CONTEUDO-->
			</td>
		</tr>
		<tr>
			<td>
				<a href="" ng-click="anterior()" ><img src="imagens_interna/img_09.jpg" width="246" height="78" alt=""></a></td>
			<td colspan="2">
				<img src="imagens_interna/img_10.jpg" width="194" height="78" alt=""></td>
			<td colspan="2">
				<a href="#" ng-click="confirmar()"><img src="imagens_interna/img_11.jpg" width="247" height="78" alt=""></a></td>
			<td>
				<img src="imagens_interna/img_12.jpg" width="177" height="78" alt=""></td>
			<td>
				<a href="" ng-click="proximo()" ><img src="imagens_interna/img_13.jpg" width="244" height="78" alt=""></a></td>
		</tr>
		<tr>
			<td colspan="7">
				<img style="margin-top: -13px; height: 72px;" src="imagens_interna/img_14.jpg" width="1108" height="73" alt=""></td>
		</tr>
		<tr>
			<td>
				<img src="imagens_interna/spacer.gif" width="97" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="246" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="168" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="26" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="209" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="38" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="177" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="244" height="1" alt=""></td>
			<td>
				<img src="imagens_interna/spacer.gif" width="75" height="1" alt=""></td>
		</tr>
	</table>
	<!-- End Save for Web Slices -->
</div>
<div ng-if="tela != 'quiz' && tela != 'certificado'">
	<table id="Tabela_01" width="1280" height="801" border="0" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td colspan="5">
				<img src="imagens_home/img_home_01.jpg" width="1280" height="171" alt=""></td>
		</tr>
		<tr>
		  <td  colspan="5" style="background-color:#fac51c;" width="1280px" height="61px" align="center"></td>
		</tr>
		<tr>
			<td rowspan="3">
				<img src="imagens_home/img_home_05.jpg" width="97" height="568" alt=""></td>
			<td colspan="3">
				<img src="imagens_home/img_home_06.jpg" width="1107" height="17" alt=""></td>
			<td rowspan="3">
				<img src="imagens_home/img_home_07.jpg" width="76" height="568" alt=""></td>
		</tr>
		<tr>
			<td colspan="7" width="1108px" height="400px" valign="top">
				<div ng-if="tela == 'introducao'" style="width: 1110px;text-align:center">
					<ng-include src="'includes/introducao.html'"></ng-include>
				</div>
				<div ng-if="tela == 'respostas'" style="width: 1110px;overflow:auto; height:390px;padding:10px">
					<ng-include src="'includes/respostas.html'"></ng-include>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="imagens_home/img_home_09.jpg" width="1107" height="151" alt=""></td>
		</tr>
		<tr>
			<td>
				<img src="imagens_home/spacer.gif" width="97" height="1" alt=""></td>
			<td>
				<img src="imagens_home/spacer.gif" width="414" height="1" alt=""></td>
			<td>
				<img src="imagens_home/spacer.gif" width="235" height="1" alt=""></td>
			<td>
				<img src="imagens_home/spacer.gif" width="458" height="1" alt=""></td>
			<td>
				<img src="imagens_home/spacer.gif" width="76" height="1" alt=""></td>
		</tr>
	</table>
</div>

<div ng-if="tela == 'certificado'" style="text-align:center">
	<ng-include src="'includes/certificado.html'"></ng-include>
</div>
</body>
</html>