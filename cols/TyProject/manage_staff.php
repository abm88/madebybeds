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
         
          width: 80px;
          height: 40px;
          border: fix;
          padding: 0px;
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
                  if (isset($_GET['upgrade'])) { 
            $upgrade = $_GET['upgrade'];
   
           
            $query1 = mysql_query("INSERT INTO admin select *from staff where staff_id = $upgrade;");
                      
          if($query1){ 
           $remove = mysql_query("delete from staff where staff_id = $upgrade;");
              echo 'Upgraded as admin '; }
}
     
    }else {
      echo "DataBase not found.";
    }  ?>
    </head>
    <body>
    <div id="request_background" class="container">
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Manage Staff</h2>    
    <p>Staff management Panel</p>
    </center>  
  </div>
  <?php
            $query = mysql_query('select *from staff');
            $result = mysql_numrows($query);
            echo '<b>Total Number of staff </b>  '.$result;
  if (isset($_GET['del'])) { 
  $del = $_GET['del'];
   
           
           // $query1 = mysql_query("INSERT INTO release_offenders select *from offender where staff_id = $del;");
           
           $remove = mysql_query("delete from staff where staff_id = $del;");
              
              
                
            
       
}

$query1 = mysql_query("select * from staff");
while ($row1 = mysql_fetch_array($query1)) {
?>
    

    
<table class="table">
 <thead class="danger">
   <tr class="success">
      <th>First Name</th>
      <th>Last Name</th>
        <th>Staff login</th>
      <th>Email</th>
      <th>Member since</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row1['staff_first_name'];?></th>
      <td ><?php echo $row1['staff_last_name'];?></td>
        <td ><?php echo $row1['staff_login'];?></td>
      <td><?php echo $row1['staff_email'];?></td>
      <td><?php echo $row1['staff_register_date'];?> </td>
        </tr>
        <form method="get" action="manage_staff.php">
            <tr><td><?php echo "<b><a href=\"manage_staff.php?upgrade={$row1['staff_id']}\"><input type=\"button\" value=\"Upgrade\"/ class=\"btn btn-success btn-lg\" id=\"del\" /> "; ?>
              <?php echo "<b><a href=\"manage_staff.php?del={$row1['staff_id']}\"><input type=\"button\" value=\"Remove\"/ class=\"btn btn-danger btn-lg\" id=\"del\" /></td> "; ?> </td><td> </td><td> </td>
        </form>
        </tr>
        </tbody>
         </table>
   <?php } ?>
    
   <center>
    <a href="admin.php"><input type="button" value="Exit " class="btn btn-primary btn-lg exit"></a>
    </center>
   

    <div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
</div>

   </div>

   
    

</body>
</html>