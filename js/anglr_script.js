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
  })
  //route untuk tambah pengunjung
  .when('/addVisitor', {
    templateUrl : '../pages/addVisitorForm.php',
  })
  // route untuk home
  .when('/home', {
    templateUrl : '../pages/home.php',
  })
  // route untuk rtc
  .when('/tutor1', {
    templateUrl : '../pages/tutor1.html',
  })
  .when('/tutor2', {
    templateUrl : '../pages/tutor2.html',
  });
});

// create the controller and inject Angular's $scope
labApp.controller('mainController', function($scope) {
  // create a message to display in our view
  $scope.message = 'Everyone come and see how good I look!';
});
