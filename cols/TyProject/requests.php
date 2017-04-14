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
         
          width: 100px;
          height: 40px;
          border: fix;
          padding: 0px;
          padding-right: 10px;
          
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
           <h2>Agency Athentication Requests</h2>   </center>   
    <p>Agencies affliation request, once agency is approved they will be eligible to take part with organisation</p>
  </div>
  <?php
  $queryData = mysql_query("select * from agency_request") or die(mysql_error());
  if (isset($_GET['approve'])) { 
    $approve = $_GET['approve'];
          
  $query = mysql_query("INSERT INTO agency select *from agency_request where agency_request_id = $approve;");

    if($query){
      $remove = mysql_query("delete from agency_request where agency_request_id = $approve;");
      
    }
 /* if (isset($_GET['agency_request_id'])) { 
  $id = $_GET['agency_request_id'];
     if(isset($_GET['agency_approve'])){
            $query = mysql_query('select *from agency_request');
            $result = mysql_numrows($query);
            echo 'Requests '.$result;
            
      $query = mysql_query('INSERT INTO agency select *from agency_request where agency_request_id = "$id";'); 
              
           /*   if($query){      
                    $query_user_login = mysql_query('INSERT INTO agency_login(agency_login, agency_password) 
                                                    select r_agency_login, r_agency_password 
                                                    from agency_request 
                                                    where r_agency_login = "test";');
                    echo'<br>approved'; } else('not inserted'); 
                
            
        } else ('cant execute'); */
//}
 }
      $query1 = mysql_query("select * from agency_request");
while ($row1 = mysql_fetch_array($query1)) {
?>
    

    <?php if(mysql_num_rows($queryData) > 0): ?>
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
      <th scope="row"><?php echo $row1['r_agency_name'];?></th>
      <td ><?php echo $row1['r_agency_login'];?></td>
      <td><?php echo $row1['r_agency_email'];?></td>
      <td><?php echo $row1['r_agency_type'];?> </td>
        </tr>
        <form method="get" action="requests.php">
        <tr><td><?php echo "<a href=\"requests.php?approve={$row1['agency_request_id']}\"><input type=\"button\" class=\"btn btn-info btn-lg submit\" id=\"agency_approve\" name=\"agency_approve\" value = \" Approve \"> </a>  ";?> </input> 

        <button type="submit" class="btn btn-danger btn-lg" id="index_1"><span class="glyphicon glyphicon-remove"></span> Refuse</button></td>
       <td> </td><td> </td><td> </td>
        </form>
        </tr>
        </tbody>
         </table>
       <?php else: ?>
        <h1> No request found</h1>
      <?php endif; ?>
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