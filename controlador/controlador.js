var datos = angular.module('dashunidaddeportiva',[]);

	datos.controller('controladornoti',function($scope,$http){

		$scope.importarnoti = function(){

			$http.get('../modelo/datosnoticias.php').then(function(datos){

				$scope.noticias = datos.data;

				console.log(datos);
			})
		}

		$scope.importarnoti();

		$scope.selectnoti = function(noti){

			console.log(noti);

			$scope.clicknoti = noti;
		}
	});