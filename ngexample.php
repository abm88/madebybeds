<html ng-app="myModule">
  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <title>My Angular App</title>
    <script>
    var myApp = angular.module("myModule", []);
        myApp.controller("myController", function($scope){ 
        var employee = {
            jobTitle : "Engineer",
            department : "Technology"
        };
            $scope.employee = employee;
            });
        
</script>
  </head>
  <body>
      <div ng-controller="myController">
      Job Title : {{employee.jobTitle}}
      </div>
  </body>
</html>