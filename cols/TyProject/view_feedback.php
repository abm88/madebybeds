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
   

    echo htmlspecialchars($_GET['del']);
    $del = $_GET['del']; 
    if (isset($_GET['del'])) { 
    $del = $_GET['del'];
   
       
          $query = mysql_query("select *from feedback");
       //   $offenders = mysql_query("select *from offender");
           
} 
//while ($offender1 = mysql_fetch_array($offenders)) {
      //      $first_name =   $offender1['offender_first_name']; 
?>

<div class="container">
    <h2> Offender tracking feedbacks</h2>
  <p>The form below serves as tracking record of the offender:</p>
<?php
   

while ($row1 = mysql_fetch_array($query)) {
            $feedback =   $row1['feedback'];
            $first_name = $row1['offender_first_name'];
            $date = $row1['date_of_feedback'];

    ?>
</head>
<body>


    <h2></h2>
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading"><?php echo 'Name:'.$first_name.' <br><small>'.$date.'</small>'; ?> </h4>
      <p class="list-group-item-text"><?php echo $feedback ?></p>
    </a>
  </div>
  <?php  } ?>
    <a href="offender_list_test.php"> <button type="button" class="btn btn-lg btn-primary" enabled>Exit</button></a>
</div>

</body>
</html>
