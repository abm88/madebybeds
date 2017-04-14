<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ex-offender System</title>
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
         
          width: 80px;
          height: 40px;
          border: fix;
          padding: 0px;
          border-radius: 0px;
      }
    </style>
    <?php 
    include('db.php');
   

   // echo htmlspecialchars($_GET['del']);
    $del = $_GET['del']; 
    if (isset($_GET['del'])) { 
    $del = $_GET['del'];
   
       
          $query = mysql_query("select *from feedback where offender_id = '$del';");
          $query1 = mysql_query("select *from feedback where offender_id = '$del';");
       //   $offenders = mysql_query("select *from offender");
           
} 
//while ($offender1 = mysql_fetch_array($offenders)) {
      //      $first_name =   $offender1['offender_first_name']; 
?>

<div class="container">
   <?php while($result = mysql_fetch_array($query1)){
    
    $name = $result['offender_first_name'];
   } 
    $check = mysql_numrows($query1);
    if($check>=1){
  
 ?>
    
    
    <body>

  <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
             <h2>History and Tracking</h2>     
           <p><?php echo "<small>". $name. ""."'s tracking feedbacks </small>"; ?></p>
    </center>  
  </div>
    <?php

while ($row1 = mysql_fetch_array($query)) {
            $feedback =   $row1['feedback'];
            $first_name = $row1['offender_first_name'];
            $date = $row1['date_of_feedback'];

    ?>
</head>

    <h2></h2>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading"><?php echo 'Name:'.$first_name.' <br><small>Date: '.$date.'</small>'; ?> </h4>
      <p class="list-group-item-text"><?php echo $feedback ?></p>
    </a>
  </div>
  <?php  } 
        } else{ ?>
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
             <h2>History and Tracking</h2>     
           <p><?php echo "<small> tracking feedbacks </small>"; ?></p>
    </center>  
  </div> <?php
        echo '<h2>No History found</h2><br>';
    }
   

?>
    <center>
    

   <form method="post" action="core_test.php">
    <a href="admin.php"><input type="submit" name="exiting" value="Exit" class="btn btn-primary btn-lg exit"></a>
       </form>
    </center>
<div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
    </div>
</body>
</html>
