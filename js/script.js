var angApp = angular.module('app', ['ngRoute']);
        
        angApp.controller('MainController', function($scope){
            $scope.message = 'main';
        });
        
        angApp.controller('ArticalController', function($scope, $http){
                $http.get('data.php').then(function(response){
                    console.log(response.data);
                    $scope.results = response.data;
                });
        });
        
        angApp.controller('contactController', function($scope){
            $scope.measure = 'contact';
        });
        angApp.controller('aboutController', function($scope){
            $scope.measure = 'about';
        });
        


        angApp.config(['$routeProvider', '$locationProvider',function($routeProvider, $locationProvider){
            $routeProvider
                .when('/artical',{
                    templateUrl: 'template/artical.html',
                    controller: 'ArticalController'
            })
                .when('/contact',{
                    templateUrl: 'template/contact.html',
                    controller: 'contactController' 
            })
                .when("/about",{
                    templateUrl: 'template/about.html',
                    controller: 'aboutController'
            })
                .otherwise({
                    templateUrl: 'template/main.html'
            })
            
            $locationProvider.html5Mode(true);
        }])
        