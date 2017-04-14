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
    </head>
    <body>
        <div id="request_background" class="container">
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="user.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>List of Offenders</h2>   </center>   
    <p>Agencies affliation request, once agency is approved they will be eligible to take part with organisation</p>
  </div>
    
            <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Ex-Offenders</div>
  <div class="panel-body">
    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.</p>
  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">   
    <div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="user.png" alt="Offender 1" height="64" width="64">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="profile.php">Offender </a></h4>
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
  </div>
</div></li>
    <li class="list-group-item"><div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="user.png" alt="Offender 1" height="64" width="64">
    </a>
  </div>
  <div class="media-body">
      <h4 class="media-heading"><a href="profile.php">Offender </a></h4>
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
  </div>
</div>            
 </li>
    <li class="list-group-item">
    <div class="media">
    <div class="media-left">
    <a href="#"><img class="media-object" src="user.png" alt="Offender 1" height="64" width="64"> </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="profile.php">Offender </a></h4>
      <b>Status</b> <i>Monitor</i><br>
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
  </div>
</div></li>
    <li class="list-group-item"><div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="user.png" alt="Offender 1" height="64" width="64">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="profile.php">Offender  </a></h4>
      <b>Status</b> <i>Released</i><br>
     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid.
      <br>
      <p> <a href="offenders_list.php" class="btn btn-default" role="button">View profile</a>
          <input type="button" class="btn btn-info btn-log" id="" value="Feedback"></input></p>
  </div>
</div></li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
            <center>
    
    <button type="submit" class="btn btn-info btn-lg" id="index_1"><span class="glyphicon glyphicon-ok"></span> Approve</button> 
   <a href="<?= $previous ?>" class="btn btn-default" role="button">Exit</a>
    
        </center>
            
    </div>
    </body>
    
</html>