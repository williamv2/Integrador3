var datos = angular.module('dashunidaddeportiva',[]);

	datos.controller('controladornoti',function($scope,$http){

		$scope.importarnoti = function(){

			$http.get('../modelo/datosnoticias.php').then(function(datos){

				$scope.noticias = datos.data;

				console.log(datos);
			})
		}

		$scope.importarnoti();

		$scope.selectnoti = function(not){

			console.log(not);

			$scope.clicknoti = not;
		}
	});

	datos.directive("formatDate", function() {
    return {
        require: 'ngModel',
        link: function(scope, elem, attr, modelCtrl) {
            modelCtrl.$formatters.push(function(modelValue) {
                if (modelValue){
                    return new Date(modelValue);
                }
                else {
                    return null;
                }
            });
        }
    };
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
				alert(response.data);
				console.log(response.status,response.data);
				$scope.show_images();
				},
				function(response){
				alert("Archivo no Valido! ");
				console.error('Error',response.status,response.data);

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

	datos.controller('countnoticia',function($scope,$http){

		$scope.importardash = function(){

			$http.get('../modelo/datos/listarcountnot.php').then(function(datos){

				$scope.dashnoti = datos.data;

				console.log(datos.data);
			})

		}

		$scope.importardash();
	});

	datos.controller('countevento',function($scope,$http){

		$scope.importardash = function(){

			$http.get('../modelo/datos/listarcountevent.php').then(function(datos){

				$scope.dashevent = datos.data;

				console.log(datos.data);
			})

		}

		$scope.importardash();
	});

	datos.controller('countconvo',function($scope,$http){

		$scope.importardash = function(){

			$http.get('../modelo/datos/listarcountconvo.php').then(function(datos){

				$scope.dashconvo = datos.data;

				console.log(datos.data);
			})

		}

		$scope.importardash();
	});

	datos.controller('countdep',function($scope,$http){

		$scope.importardash = function(){

			$http.get('../modelo/datos/listarcountdep.php').then(function(datos){

				$scope.dashdep = datos.data;

				console.log(datos.data);
			})

		}

		$scope.importardash();
	});