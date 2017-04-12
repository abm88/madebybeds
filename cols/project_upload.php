

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
    
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <script type="text/javascript" src="">
           // Material Select Initialization
 $(document).ready(function() {
    $('.mdb-select').material_select();
  });
      </script>
 
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
        <h3><i class="fa fa-user"></i> Project Upload:</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>Use this form to upload your work on the showcase. </p>

    </div>



<!--Naked Form-->
 <div class="row">
     
    <form class="col s12">
      <div class="row">
         <div class="col s6">
               <label>Project Subject</label>
    <select class="mdb-select browser-default" id="project_subject" ng-model="project_subject">
          <option value="" disabled selected>Choose Subject</option>
          <option value="1">Computer Science</option>
          <option value="2">Robotics</option>
          <option value="3">Mobile Application</option>
    </select>
      
  </div>
  

      
         <div class="col s6">
               <label>Project Type</label>
    <select class="mdb-select browser-default" id="project_type" ng-model="project_type">
          <option value="" disabled selected>Choose Individual/Group</option>
          <option value="1">Individual Project</option>
          <option value="2">Group Project</option>
         
    </select>
      
  </div>
  
  </div>
  <div class="row">
        <div class="input-field col s6">
          <input id="project_name" type="text" class="validate" ng-model="project_name">
          <label for="project_name">Project Name</label>
        </div>
      
      
     
      
          <div class="file-field col s6">
        <div class="btn btn-primary btn-sm">
            <span>Choose file</span>
            <input type="file">
        </div>
        <div class="file-path-wrapper">
           <input class="file-path validate" type="text" placeholder="Upload Project Image">
        </div>
    </div>
        
      </div>
      <div class="row">
         <div class="input-field col s12">
           <textarea type="text" id="project_description" class="md-textarea"></textarea>
                <label for="form76">Project Details</label>
        </div
     

      <div class="row">
    
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