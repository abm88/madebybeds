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
                border: 0px;
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
        .search{
            border: 0px;
            border-bottom-color: aqua;
            height: 40px;
        }
      .btn{
         
          width: 100px;
          height: 40px;
          border: fix;
          padding: 8px;
          padding-right: 10px;
          
          border-radius: 0px;
      }
    </style>
    <?php include('db.php');
         $query = mysql_query('select *from agency_request');
            $result = mysql_numrows($query);
      // $name =  $_SESSION['user_login'];
      
    ?>
            
    
</head>
<body>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="requests.php">View Requests <span class="badge"><?php echo $result; ?> </span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Offenders <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="manage_offender.php">Manage offender</a></li>
            
            <li><a href="offender_list.php">View all offenders</a>
                <li><a href="release_offenders_admin.php">View Released offenders</a>
            <li role="separator" class="divider"></li>
            <li><a href="offender_registeration.php">+ Add offenders</a>
            <li role="separator" class="divider"></li>
            <li><a href="offender_list_admin.php">Track offender</a></li>
          </ul>
        </li>
          
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="manage_staff.php">Manage Staff</a></li>
            <li><a href="staffs_list.php">View all staff</a>
            <li role="separator" class="divider"></li>
            <li><a href="staff_registration.php">Create staff</a>
          </ul>
        </li>
          
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control search" placeholder="Search by name">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Settings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="manage_agency.php">Manage Agency</a></li>
              
            <li><a href="agency_list.php">View all Agencies</a></li>
              
               <li role="separator" class="divider"></li>
            <li><a href="manage_staff.php">Manage Staff</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="index.php">Sign out</a></li>
          </ul>
             <li><a href="index.php"><span class="glyphicon glyphicon-off"></span> Sign out</a></li>
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
    $query = mysql_query("select * from agency limit 6");;
    while($row = mysql_fetch_array($query)){
        $agency_name= $row['agency_name'];
        $telephone = $row['agency_phone_number'];
        $address = $row['agency_address'];
      //  $gender = $row['offender_gender'];
       // $comment = $row['other_comments'];
        
  
    ?>

      <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="thumbnail-small.jpg" alt="offender">
      <div class="caption">
        <h3><?php echo $agency_name; ?></h3>
        <p><b>Telephone:</b> <?php echo $telephone; ?><br> <b>Address: </b> <?php echo $address; ?></p>
        <p><form method="get" action="agency_profile.php"><?php echo "<b><a href=\"agency_profile.php?del={$row['agency_id']}\"><input type=\"button\" value=\"Profile\"/ class=\"btn btn-success btn-lg\" id=\"del\" /> </a>"; ?>
          <?php echo "<b><a href=\"manage_individual_agency.php?del={$row['agency_id']}\"><input type=\"button\" value=\"Manage\"/ class=\"btn btn-info btn-lg\" id=\"del\" role=\"button\"/></a> "; ?></form></p>
      </div>
    </div>
  </div>

<?php } ?>

</div>
    
    <h2>Help</h2>
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Our services</div>
      <div class="panel-body">Affliated Organisations</div>
        </div>
            </div>

</div>
</body>
</html>
