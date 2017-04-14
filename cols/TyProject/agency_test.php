<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Ex-Offenders DB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <style>
       .jumbotron {
                background-color: #B8D9D8;
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
          padding: 10px;
          border-radius: 0px;
      }
    </style>

</head>

<body>

<div class="container" data-theme="b" >
<nav class="navbar navbar-default">
  <div class="container-fluid" data-theme="b">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Agency Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
       <li><a href="updates_limited.php">Assigned Offender <span class="badge">0</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Offenders <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="offeder_feed_limited.php">feed to offender</a></li>
            <li><a href="offender_list_agency.php">View Offenders</a></li>
            
            
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="release_offenders.php">View Released offenders</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search by name">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
           <li><a href="login.html">Help</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-off"></span> Sign out</a></li>
       
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>You are logged in as Agency</h2>   </center>   
    <p>Agencies affliation request, once agency is approved they will be eligible to take part with organisation</p>
  </div>
  <div class="row">
      <?php 
    include('db.php');
    $query = mysql_query("select * from offender limit 3");;
    while($row = mysql_fetch_array($query)){
        $first_name= $row['offender_first_name'];
        $gender = $row['offender_gender'];
        $comment = $row['other_comments'];
        
  
    ?>



    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="thumbnail-small.jpg" alt="offender">
      <div class="caption">
        <h3><?php echo $first_name; ?></h3>
        <p><?php echo 'Gender '.$gender. '<br>Notes: '. $comment; ?></p>
        <p><a href="profile_limited.php" class="btn btn-primary" role="button">Profile</a> </p>
      </div>
    </div>
  </div>
      <?php   } ?>
</div>
    
    <h2>Help</h2>
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Affliated Agencies</div>
      <div class="panel-body">Affliated Organisations</div>
        </div>
            </div>

</div>
</body>
</html>
