var app = angular.module('vistaunidaddeportiva',[]);

	app.controller('controladornoticia',function($scope,$http){

		$scope.importarnoticia = function(){

			$http.get('../modelo/datos/datosnoticiaindex.php').then(function(datos){

				$scope.noticias = datos.data;
				
				console.log(datos);
			})
		}

		$scope.importarnoticia();
	});

	app.controller('controladorgaleria',function($scope,$http){

		$scope.importarfotos = function(){

			$http.get('../modelo/datos/fotosgaleria.php').then(function(datos){

				$scope.fotos = datos.data;
				
				console.log(datos);
			})
		}

		$scope.importarfotos();
	});

	app.controller('controladorevent',function($scope,$http){

		$scope.importarevent = function(){

			$http.get('../../modelo/datos/datosevent.php').then(function(datos){

				$scope.eventos = datos.data;

			})
		}

		$scope.importarevent();

		
	});

	app.controller('controladorconvo',function($scope,$http){

		$scope.importarconvo = function(){

			$http.get('../../modelo/datos/datosconvo.php').then(function(datos){

				$scope.convo = datos.data;

			})
		}

		$scope.importarconvo();
	});