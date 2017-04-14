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
                background-color: aliceblue;
 
        }
       
      .btn{
         
          width: 150px;
          height: 40px;
          border: fix;
          padding: 10px;
          padding-right: 10px;
          
          border-radius: 0px;
      }
    </style>
</head>
<body>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Staff Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Offenders <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            
              <li><a href="offender_list_staff.php">View all offenders</a> 
             
            
              
              <li role="separator" class="divider"></li>
            <li><a href="offenders_list_staff.php">Assign Offender</a></li>
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
        <li><a href="index.php"><span class="glyphicon glyphicon-off"></span> Sign out</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Settings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="agency_list.php">View all Agencies</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="#">Help</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <div class="jumbotron">
    <h1>Ex-Offender Management System</h1>
    <p>We are having large database of Ex-offenders!. Our Affliated Agencies.</p> 
  </div>
  <div class="row">
      <?php 
    include('db.php');
    $query = mysql_query("select * from offender limit 12");;
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
        <p><b>Tracker's comments:</b> <br><?php echo '</b>'.$comment; ?></p>
          <form method="get" action="profile_limited.php">
        
              <?php echo "<b><a href=\"profile_limited.php?del={$row['offender_id']}\"><input type=\"button\" value=\"Profile\"/ class=\"btn btn-success btn-lg\" id=\"del\" /> </a>"; ?>
          </form>
      </div>
    </div>
  </div>

 <?php } ?>

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
