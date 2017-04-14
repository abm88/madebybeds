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
       
      }
         .exiting{
             border-radius: 0px;
         }
        
      .btn{
         
          width: 100px;
          height: 40px;
          border: fix;
          padding: 10px;
          border-radius: 0px;
           margin-top: 10px;
      }
    </style>
<?php 
    include('db.php');
    $name =  $_SESSION['agency_login'];
  //  echo $name;
    
    
        $query1 = mysql_query("select * from agency where agency_login like '$name'");
        while($result = mysql_fetch_array($query1)){
          $agency_name = $result['agency_name'];
         // echo '<b>Agency Name: </b>'.$agency_name;
          
       
      $query2 = mysql_query("select * from offender where offender_agency like '$agency_name'");
        while($result1 = mysql_fetch_array($query2)){
         
            $offender_name = $result1['offender_first_name'];
       //   echo '<b>offender Name: </b>'.$offender_name;
           }
             }
            $num = mysql_query("select * from offender where offender_agency like '$agency_name'");
            
            $number_offenders = mysql_num_rows($num); 
           // if($number_offenders >=1){}
            
       


   
         /*   $query = mysql_query('select *from offender');
            $result = mysql_numrows($query);
            echo '<b>Total Number of offeners </b>  '.$result; 
            $query = mysql_query("INSERT INTO release_offenders select *from offender where offender_id = $release;");
            
           // $query = mysql_query("INSERT INTO release_offenders select *from offender where offender_id = '$release;' ");
            if($query){
           $remove = mysql_query("delete from offender where offender_id = $release;");} */
              
             
            
       

 /*   mysql_query("select * from agency");
      if (isset($_GET['agency_id'])) {
          $agencyID = $_GET['$del'];
          $query1 =    mysql_query("select * from agency where agence_id = '$agencyID';");
          
          while($row1 = mysql_fetch_array($query1)){
          $agency_name = $row1['agency_name'];
          echo '<b>Agency Name: </b>'.$agency_name;
          
      } }
      
     // $name =  $_SESSION['agency_login'];
     // echo $name;
    /*  $query1 = mysql_query("select * from agency where agency_password like '$name'");
      while($result = mysql_fetch_array($query1)){
          $agency_name = $result['agency_name'];
          echo '<b>Agency Name: </b>'.$agency_name;
      } */
     
    
    ?>
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
       <li><a href="#">Assigned Offender <span class="badge"><?php echo $number_offenders; ?></span></a></li>
          <li><a href="updates_limited.php">Notice board <span class="badge">0</span></a></li>
     
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
    <p align="center">Affliated Agency</p>
  </div>
  <div class="row">
      <?php 
    include('db.php');
     
    ; 
    //
    /*  $query1 = mysql_query("select * from agency where agency_password like '$name'");
      while($result = mysql_fetch_array($query1)){
          $agency_name = $result['agency_name'];
          echo '<b>Agency Name: </b>'.$agency_name;
      } +++ SELECTING NEW OFFENDERS OF THE PARTICULAR AGENCY */ 
      $name =  $_SESSION['agency_login'];
       
    
    
        $query1 = mysql_query("select * from agency where agency_login like '$name'");
        while($result = mysql_fetch_array($query1)){
          $agency_name = $result['agency_name'];
          
             }
            $query2 = mysql_query("select * from offender where offender_agency like '$agency_name'");
            while($result1 = mysql_fetch_array($query2)){
         
            $first_name = $result1['offender_first_name'];
            $gender = $result1['offender_gender'];
            $comment = $result1['other_comments'];
        
  
    ?>



    <div class="col-sm-6 col-md-2">
    <div class="thumbnail">
      <img src="offender_profile.jpg" alt="offender">
      <div class="caption">
        <h3><?php echo $first_name; ?></h3>
        <p><?php echo 'Gender '.$gender ?></p>
          <table>
              <tr>
                  <td><form method="get" action="individual_history_agency.php">  <?php echo "<b><a href=\"feedback.php?del={$result1['offender_id']}\"><input type=\"button\" value=\"Track\"/ class=\"btn exiting btn-warning btn-lg\" id=\"del\" role=\"button\"/></a> "; ?></td></tr><tr><td>
             <?php echo "<b><a href=\"individual_history_agency.php?del={$result1['offender_id']}\"><input type=\"button\" value=\"History\"/ class=\"btn btn-info exiting btn-lg\" id=\"del\" role=\"button\"/></a> "; ?> </td>
              </tr>
          </form>
          
          </table>
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
