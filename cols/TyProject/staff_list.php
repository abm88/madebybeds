<html>
<head>
    <title>Agency Athentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       <?php 
        $previous = "javascript:history.go(-2)";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
                }
        ?>
    <style>
    .exit{
          margin: 10px;
          width: 80px;
          height: 40px;
          border: fix;
          padding: 0px;
          border-radius: 0px;
      }
      .btn{
         
          width: 80px;
          height: 40px;
          border: fix;
          padding: 0px;
          border-radius: 0px;
      }
    </style>
    </head>
    <body>
        <div id="request_background" class="container">
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="users.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Staff Members in system</h2>   </center>   
    
  </div>
    
            <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Staff Members</div>


  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">   
    <div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="staff.png" alt="staff 1" height="64" width="64">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="profile.php">Staff Name</a></h4>
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
  </div>
</div></li>
    <li class="list-group-item"><div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="staff.png" alt="staff 1" height="64" width="64">
    </a>
  </div>
  <div class="media-body">
      <h4 class="media-heading"><a href="profile.php">Staff Name </a></h4>
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
  </div>
</div>            
 </li>
    <li class="list-group-item">
    <div class="media">
    <div class="media-left">
    <a href="#"><img class="media-object" src="staff.png" alt="staff 1" height="64" width="64"> </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="profile.php">Staff Name </a></h4>
      
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
  </div>
</div></li>
    <li class="list-group-item"><div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="staff.png" alt="staff 1" height="64" width="64">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="profile.php">Staff Name  </a></h4>
    
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
     
  </div>
</div></li>
    <li class="list-group-item">Above all users are active users of the system.</li>
  </ul>
</div>
            <center>
    
    <button type="submit" class="btn btn-info btn-lg" id="index_1"><span class="glyphicon glyphicon-ok"></span> Approve</button> 
   <center>
    <a href="admin.php"><input type="button" value="Exit " class="btn btn-primary btn-lg exit"></a>
    </center>
            <div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
    </div>
    </body>
    
</html>