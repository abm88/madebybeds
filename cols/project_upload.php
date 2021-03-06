<?php 
mysql_connect("localhost","root","") or die ("Not connected");

mysql_selectdb("madebybeds")or die("Database not found");

?>

   <!DOCTYPE html>
<html lang="en" >

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
    
    
    <div class="container" ng-app="myapp" ng-controller="projectUploadcontroller">
        <!--Naked Form-->
            <div class="card-block">
        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-user"></i> Project Upload: </h3>
            <hr class="mt-2 mb-2">
        </div>
        <!--Body-->
        <p>Use this form to upload your work on the showcase. </p>

    </div>



<!--Naked Form-->
 <div class="row">
     
    <form class="col s12" method="POST" action="project_upload.php" name="form_upload" enctype="multipart/form-data">
      <div class="row">
         <div class="col s6">
               <label>Project Subject</label>
    <select class="mdb-select browser-default" id="project_subject" ng-model="project_subject">
          <option value="" disabled selected>Choose Subject</option>
          <option value="Computer Science">Computer Science</option>
          <option value="Robotics">Robotics</option>
          <option value="Mobile Application">Mobile Application</option>
    </select>
      
  </div>
  

      
         <div class="col s6">
               <label>Project Type</label>
    <select class="mdb-select browser-default" id="project_type" ng-model="project_type">
          <option value="" disabled selected>Choose Individual/Group</option>
          <option value="Individual_project">Individual Project</option>
          <option value="Group_Project">Group Project</option>
         
    </select>
      
  </div>
  
  </div>
  <div class="row">
        <div class="input-field col s6">
          <input id="project_name" type="text" class="validate" ng-model="project_name">
          <label for="project_name">Project Name</label>
        </div>
      
      </div>
     
      <div class="row">
               <div class="file-field col s6">
           
        <div class="btn btn-primary btn-sm">
            <span>Choose Image/s</span>
            <input type="file" name="file_img[]" multiple ng-model="upload_image">
        </div>
        <div class="file-path-wrapper">
           <input class="file-path validate" disabled="true" type="text" placeholder="Upload Project Image">
        
           
        </div>
    </div>
        
      </div>
        <div class="row">
        <div class="input-field col s6">
          <input id="project_url" type="text" class="validate" name="project_url" ng-model="project_url">
          <label for="project_url">Project Video URL <small>for example video from youtube</small></label>
        </div>
      
      </div>
      <div class="row">
         <div class="input-field col s12">
             <i class="fa fa-pencil prefix"></i>
           <textarea type="text" id="project_description" class="md-textarea" name="description" ng-model="project_description"></textarea>
                <label for="form76">Project Details</label>
        </div
     

      <div class="row">
    
      </div>

      <div class="row">
        <div class="col s12">
          <input type="submit" name="btnSubmit" class="btn btn-info" ng-click="insertProject()" value="Submit"/>
        </div>
      </div>
    </form>
  </div>
    </div> 
    
    <script>
         $(document).ready(function() {
    Materialize.updateTextFields();
  });

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
         
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
 app.controller("projectUploadcontroller", function($scope, $http){  
      $scope.insertProject = function(){  
           $http.post(  
                "insert_project.php",  
                {'project_subject':$scope.project_subject, 'project_type':$scope.project_type, 'project_name':$scope.project_name, 'project_description':$scope.project_description, 'upload_image':$scope.upload_image,}  
           ).success(function(data){  
                alert(data);  
                $scope.project_subject = null;  
                $scope.project_type = null;  
                $scope.project_name = null;
                $scope.project_description = null;
                $scope.upload_image = null;  
               
           });  
      }  
 });  
 </script>  
 <?php 
 if(isset($_POST['btnSubmit'])){
     for($i = 0; $i<count($filename = $_FILES["file_img"]["name"]); $i++){
                
                $filetmp = $_FILES["file_img"]["tmp_name"][$i];
                $filename = $_FILES["file_img"]["name"][$i];
                $filetype = $_FILES["file_img"]["type"][$i];
                $filepath = "images/".$filename;
                $description = $_POST["description"];
                
                $project_url = $_POST["project_url"];
                $project_url = explode('=', $project_url);
                $project_url = $project_url[1];
                move_uploaded_file($filetmp, $filepath);
            
            $sql = "insert into img_upload(img_name, img_path, img_type, description, project_video_url) values(
                '$filename',
                '$filepath',
                '$filetype',
                '$description',
                '$project_url'
                )";
                $result = mysql_query($sql);
        }
 }
 
 ?>