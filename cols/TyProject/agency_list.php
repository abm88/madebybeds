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
      
    </style>
    <?php
       $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];}
        

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
           <h2>All agencies</h2>    
    <p>Agencies can be banned if they are not following the strucutred rules of organisation</p>
    </center>  
  </div>
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
  <?php
  if (isset($_GET['del'])) { 
  $del = $_GET['del'];
   
            $query = mysql_query('select *from agency');
            $result = mysql_numrows($query);
            echo '<b>Number of Agencies </b>  '.$result;
           
           $remove = mysql_query("delete from agency where agency_id = $del;");
              
              if($remove){      
                    
                     } else { echo 'not Removed'; }
                
            
       
}
$query1 = mysql_query("select * from agency");
while ($row1 = mysql_fetch_array($query1)) {
?>
    

    

      <th scope="row"><?php echo $row1['agency_name'];?></th>
      <td ><?php echo $row1['agency_login'];?></td>
      <td><?php echo $row1['agency_email'];?></td>
      <td><?php echo $row1['agency_type'];?> </td>
        </tr>
      
   <?php } ?>
    
     
        </tr>
        </tbody>
         </table>
   <center>
    <a href="<?= $previous ?>"><input type="button" value="Exit " class="btn btn-primary btn-lg exit"></a>
    </center>
   


<div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
</div>
   </div>

   
    

</body>
</html>