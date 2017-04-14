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
            border-radius: 0px;
 
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
           <h2>Manage Agencies</h2>    
    <p>Agencies can be banned if they are not following the strucutred rules of organisation</p>
    </center>  
  </div>
  <?php
  if (isset($_GET['release'])) { 
  $release = $_GET['release'];
   
            $query = mysql_query('select *from offender');
            $result = mysql_numrows($query);
            echo '<b>Total Number of offeners </b>  '.$result;
            $query1 = mysql_query("INSERT INTO release_offenders select *from offender where offender_id = $release;");
           if($query1){
           $remove = mysql_query("delete from offender where offender_id = $release;");}
              
              
                
            
       
}
$query1 = mysql_query("select * from offender");
while ($row1 = mysql_fetch_array($query1)) {
?>
    

    
<table class="table">
 <thead class="danger">
   <tr class="success">
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row1['offender_first_name'];?></th>
      <td ><?php echo $row1['offender_last_name'];?></td>
      <td><?php echo $row1['offender_gender'];?></td>
      <td><?php echo $row1['offender_address'];?> </td>
        
        </tr>
    
      
        <form method="get" action="manage_offender_limited.php">
            <tr><td><?php echo "<b><a href=\"manage_offender.php?release={$row1['offender_id']}\"><input type=\"button\" value=\"Release\"/ class=\"btn btn-success btn-lg\" id=\"del\" /> "; ?>
               </td><td> </td><td> </td>
        </form>
        </tr>
        </tbody>
         </table>
   <?php } ?>
    
   
   
  <center>
    <a href="<?= $previous ?>"><input type="button" value="Exit " class="btn btn-primary btn-lg exit"></a>
    </center>
<div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
  </table>
</div>


   </div>

   
    

</body>
</html>