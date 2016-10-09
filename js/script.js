var labApp = angular.module('labApp',['ngRoute']);

labApp.config(function($routeProvider) {
  $routeProvider

    // route untuk rtc
    .when('/rtc', {
      templateUrl : '../pages/rtc.php',
      controller  : 'mainController'
    })
    // route untuk data
    .when('/data', {
      templateUrl : '../pages/data.php',
      controller  : 'dataController'
    })
    //route untuk tambah pengunjung
    .when('/addVisitor', {
      templateUrl : '../pages/addVisitorForm.php',
      controller  : 'addController'
    })
    // route untuk home
    .when('/home', {
      templateUrl : '../home.php',
      controller  : 'homeController'
    });

});

// create the controller and inject Angular's $scope
labApp.controller('mainController', function($scope) {
  // create a message to display in our view
  $scope.message = 'Everyone come and see how good I look!';
});
labApp.controller('dataController', function($scope) {
  // create a message to display in our view
  $scope.message = 'This is data!';
});
labApp.controller('homeController', function($scope) {
  // create a message to display in our view
  $scope.message = 'This is home!';
});
labApp.controller('addController', function($scope) {
  // create a message to display in our view
  $scope.message = 'This is user!';
});
