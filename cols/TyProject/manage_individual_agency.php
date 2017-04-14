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
     
    }else {
      echo "DataBase not found.";
    }  ?>
    </head>
    <body>
    <div id="request_background" class="container">
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Manage Agencies</h2>    
    <p>Agencies can be banned if they are not following the strucutred rules of organisation</p>
    </center>  
  </div>
  <?php
  if (isset($_GET['del'])) { 
  $del = $_GET['del'];
   
            $query = mysql_query('select *from agency');
            $result = mysql_numrows($query);
            echo '<b>Number of Agencies </b>  '.$result;
           
           $remove = mysql_query("select *from agency where agency_id = $del;");
              
              if($remove){      
                    
                     } else { echo 'not Removed'; }
                
            
  }

$query1 = mysql_query("select *from agency where agency_id = $del;");
while ($row1 = mysql_fetch_array($query1)) {

?>
    

    
<table class="table">
 <thead class="danger">
   <tr class="success">
      <th>Agency</th>
      <th>Login</th>
      <th>Email</th>
      <th>Agency catagory</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row1['agency_name'];?></th>
      <td ><?php echo $row1['agency_login'];?></td>
      <td><?php echo $row1['agency_email'];?></td>
      <td><?php echo $row1['agency_type'];?> </td>
        </tr>
        <form method="get" action="manage_agency">
            <tr><td><?php echo "<b><a href=\"manage_agency.php?del={$row1['agency_id']}\"><input type=\"button\" value=\"Remove\"/ class=\"btn btn-danger btn-lg\" id=\"del\" /></td> "; ?>
       <td>  </td><td> </td><td> </td>
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