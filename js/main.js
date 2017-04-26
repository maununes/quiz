var quizApp = angular.module('quizApp', []);

quizApp.controller('QuizController', function QuizController($scope,$http) {
	$scope.tela		 = 'introducao';// respostas , certificado
	$scope.url 		 = 'perguntas.php';
	$scope.urlEnvio  = 'respostas.php';
	$scope.nomejogador = null;

	$scope.jogador = (new Date()).getTime();

	$scope.dados = [];
	
	$scope.idPerguntaAtual = 0;

	$scope.perguntaAtual = {};
	
	$scope.respostas = [];
		
	$scope.perguntas = [];
	
	$scope.textoTonomeJogador = function(texto){
		$scope.nomejogador = texto;
	}
	
	$scope.proximo = function(){
		if($scope.idPerguntaAtual < ($scope.dados.length - 1)){
			$scope.idPerguntaAtual = $scope.idPerguntaAtual + 1;
			$scope.perguntaAtual = $scope.dados[$scope.idPerguntaAtual];
			$scope.embaralharRespostas($scope.perguntaAtual);
		}else{
			alert('Clique em CONFIRMAR para enviar suas respostas');
		}
	};
		
	$scope.anterior = function(){
		if($scope.idPerguntaAtual > 0){
			$scope.idPerguntaAtual = $scope.idPerguntaAtual - 1;
			$scope.perguntaAtual = $scope.dados[$scope.idPerguntaAtual];
			$scope.embaralharRespostas($scope.perguntaAtual);
		}
	};
		
	$scope.comecar = function(){
		$scope.tela	= 'quiz';

		$scope.jogador = (new Date()).getTime();

		$scope.dados = [];
		
		$scope.idPerguntaAtual = 0;
		
		$scope.perguntaAtual = {};
		
		$scope.respostas = [];
			
		$scope.perguntas = [];
		
		$http({
		  method: 'GET',
		  url: $scope.url
		}).then(function successCallback(response) {
			console.log($scope.dados);
			$scope.dados = response.data.dados;
			$scope.idPerguntaAtual = 0;
			$scope.perguntaAtual = $scope.dados[$scope.idPerguntaAtual];
			$scope.embaralharRespostas($scope.perguntaAtual);
		  }, function errorCallback(response) {
			alert('erro ao encontrar url');
		  });
	};
	
	$scope.escolherResposta = function(resposta){
		$scope.respostas[$scope.idPerguntaAtual] = resposta;
	}
 
	$scope.mostraRespostaEscolhida = function (){
		return $scope.respostas[$scope.idPerguntaAtual];
	}
	
	$scope.embaralharRespostas = function(perguntaAtual){
		if(!$scope.respostas[$scope.idPerguntaAtual]){

			var array = [];
			array.push(perguntaAtual.resp1);
			array.push(perguntaAtual.resp2);
			array.push(perguntaAtual.resp3);
			array.push(perguntaAtual.resp4);
			array = shuffleArray(array);
			$scope.perguntaAtual.resp1 = array[0];
			$scope.perguntaAtual.resp2 = array[1];
			$scope.perguntaAtual.resp3 = array[2];
			$scope.perguntaAtual.resp4 = array[3];
		}
	}

	$scope.confirmar = function(){
		var txt;
		var r = confirm("Deseja finalizar o quiz e enviar suas respostas?");
		if (r == false) {
			return;
		}

		$http({
        url: $scope.urlEnvio,
        method: "POST",
        data: { 
				'nomejogador': $scope.nomejogador,
				'jogador'   : $scope.jogador,
				'perguntas' : $scope.dados,
				'respostas' : $scope.respostas
			}
		})
		.then(function(response) {
			$scope.encerrar();
		}, 
		function(response) { 
			alert('houve erro no envio');
		});
	};
	
	$scope.totalAcertos = function(){
		var total = 0;
		for (i = 0; i < $scope.respostas.length; i++){
			if($scope.respostas[i] == $scope.dados[i].respcor){
				total = total + 1;
			}
		}
		
		return total;
	}
	
	$scope.mostrarPorcentagemAcerto = function(){
		var acertos = $scope.totalAcertos();
		var total = $scope.dados.length;
		
		return 	(100*acertos/total);
	}

	$scope.encerrar = function(){
		$scope.tela	= 'respostas';
		
	}

	$scope.goToCertificado = function(){
		$scope.tela	= 'certificado';
	}
	
	$scope.goToComecar     = function(){
		$scope.comecar();
	}
	
	$scope.goToIntroducao = function(){
		$scope.tela		  = 'introducao';
		$scope.introducao = null;
	}
});

function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}


quizApp.filter('unsafe', function($sce) {
    return function(val) {
        return $sce.trustAsHtml(val);
    };
});

