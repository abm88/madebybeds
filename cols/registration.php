

   <!DOCTYPE html>
<html lang="en" >
<style>

</style>
<head>

      
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>MadeByBeds</title>
    <!-- Angular CDN -->
   


 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
   <style>
       .container{
           margin-top: 1cm;
       }
       </style>
</head>
<body>
    <div class="container" ng-app="myapp" ng-controller="usercontroller">
    <!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-xs-center">
        <h3><i class="fa fa-user"></i> Signup Form:</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>Signup to upload your creative work. </p>

    </div>



<!--Naked Form-->
 <div class="row">
     
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" ng-model="first_name">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" ng-model="last_name">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <input id="user_email" type="email" class="validate" ng-model="user_email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate" ng-model="password">
          <label for="password">Password</label>
        </div>
     
        <div class="input-field col s6">
          <input  value="I am not editable" id="re_password" type="password" class="validate">
          <label for="re_password">Password Again</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="user_contact" type="text" class="validate" ng-model="user_contact">
          <label for="user_contact">User Contact</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
          <input type="submit" name="btnSubmit" class="btn btn-info" ng-click="insertData()" value="Submit"/>
        </div>
      </div>
    </form>
  </div>
    </div>  
    <script>
         $(document).ready(function() {
    Materialize.updateTextFields();
  });
        </script>
<!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
<script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                "insert.php",  
                {'first_name':$scope.first_name, 'last_name':$scope.last_name, 'user_email':$scope.user_email, 'password':$scope.password, 'user_contact':$scope.user_contact,}  
           ).success(function(data){  
                alert(data);  
                $scope.first_name = null;  
                $scope.last_name = null;  
                $scope.user_email = null;
                $scope.password = null;
                $scope.user_contact = null;   
           });  
      }  
 });  
 </script>  