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

	datos.directive("fileInput", function($parse){
	return{
		link: function($scope, element, attrs){
			element.on("change", function(event){
				
				var files = event.target.files;
				
				$parse(attrs.fileInput).assign($scope, element[0].files);
				
				$scope.$apply();
				});
			}
		}
	});

	datos.controller("uploadController", function($scope, $http){
			
			$scope.uploadImage = function(){
				var form_data = new FormData();
				angular.forEach($scope.files, function(file){
				console.log(file);
				form_data.append('file[]', file);
				});
			$http.post('image_upload.php', form_data,
			{
				transformRequest: angular.identity,
				headers: {'Content-Type': undefined,'Process-Data': false}
			}).then(function(response){
				alert("Subida exitosa! ");
				$scope.show_images();
				});
			}
			$scope.show_images = function(){
				$http.get("show_images.php")
				.then(function(data){
				$scope.uploaded_images = data.data;
				console.log(data);
				});
			}
			});