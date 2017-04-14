<html>
<head>
    <title>Agency Athentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>

        .jumbotron {
                background-color: aliceblue;
 
        }
       .exit{
          margin: 10px;
          width: 80px;
          height: 40px;
          border: fix;
          padding: 0px;
          border-radius: 0px;
      }
      .btn{
         
          width: 100px;
          height: 40px;
          border: fix;
          padding: 0px;
          padding-right: 10px;
          
          border-radius: 0px;
      }
    </style>
    <?php


    $user_name = "root";
    $password = "";
    $database = "ex_offenders";
    $server = "localhost";

    $con = mysql_connect($server, $user_name, $password);

    $db_found = mysql_select_db($database);

    if($db_found){
     
    }else {
      echo "DataBase not found.";
    }  ?>
    </head>
    <body>
    <div id="request_background" class="container">
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Updates in or Notice board</h2>   </center>   
            <p><center>Notices to staff and agencys</center></p>
  </div>
  
<?php 
include('db.php');
        
        
        ?>
    
   
   
 <center>
    <a href="agency.php"><input type="button" value="Exit " class="btn btn-primary btn-lg exit"></a>
    </center>
<div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
</div>


   </div>

   
    

</body>
</html>