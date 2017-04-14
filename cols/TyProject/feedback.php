<!DOCTYPE html>
<html lang="en">
<head>
   
  <title>Ex-offender System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php 
    include('db.php');
    session_start();
    $name = $_SESSION['agency_login'];
    $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];
            
}

   // echo htmlspecialchars($_GET['del']);
    $del = $_GET['del']; 
    if (isset($_GET['del'])) { 
    $del = $_GET['del'];
   
       
          $query = mysql_query("select *from offender where                offender_id = '$del';");
            
            while ($row1 = mysql_fetch_array($query)) {
              $first_name =   $row1['offender_first_name'];
              $gender =   $row1['offender_gender'];
              $offender_ID =   $row1['offender_id'];
           
             if(isset($_POST['feedback'])){
            
         // $offender = $_GET['del'];
        //  $id = $_GET['del'];
        $first_name =   $row1['offender_first_name'];
        $feedback = $_POST['feedback_comment'];
        $sql  = "INSERT INTO feedback (offender_id,feedback, offender_first_name, date_of_feedback)
                VALUES('$offender_ID','$feedback','$first_name', NOW())";
                
        mysql_query($sql);
         }
       // echo 'this '.$first_name;
      //  echo'done';
    }
} 
   
    ?>
</head>
<body>

<div class="container">
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
         <h2> Offender tracking feedbacks</h2>   
     <p>The form below serves as tracking record of the offender:</p>
    </center>  
  </div>
    
 
    <h2><?php echo $first_name ?></h2>
    <p><?php echo $gender ?>  <p><?php echo "ID: ".$offender_ID ?></p></p>
  
  <form action='feedback.php?del=<?php echo $del ?>' method="post">
    <div class="form-group">
      <label for="feedback_comment"></label>
      <textarea class="form-control" rows="5" id="feedback_comment" name="feedback_comment"></textarea>
        <br>
        <button type="submit" class="btn btn-lg btn-primary" name="feedback" value="" enabled> Submit feeds</button>
    </div>
  </form>
    <form method="post" action="core_test.php">
    <a href="agency.php"> <button type="submit" name ="exiting" class="btn btn-lg btn-primary" enabled>Exit</button></a>
    </form>
</div>

</body>
</html>
