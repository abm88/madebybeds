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
      .assign{
          margin-top: 15px;
          width: 130px;
          height: 40px;
          border: fix;
          padding: 0px;
         
         
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
           <h2>Assign Offender</h2>   </center>   
            <p><center>Assign offender to particular Agency </center></p>
  </div>
  
<?php 
       
        if (isset($_GET['del'])) { 
            $del = $_GET['del'];
            
        $query = mysql_query("select *from offender where offender_id = $del;");
            while($row = mysql_fetch_array($query)){
                $name = $row['offender_first_name'];
                echo '<h1>Selected '.$name.'</h1>';
            }
            
             if(isset($_POST['submit_agency'])){
                 $select = @($_POST['agency']);
               //   echo 'Selected '.$select;
                if($_POST['agency']) {
             //   $selected = mysql_real_escape_string($_POST['selected_agency']);
                    ?> <div class="alert alert-success" role="alert">Offender Successfully assigned to <?php
                    echo '<b> '.$select.'</b> by staff Admin. </div>';
                    
                    $query = mysql_query("UPDATE offender SET offender_agency = '$select' where offender_id = '$del';");

             }
            
            
} }
  
include('db.php');
        
        $query = mysql_query("select * from agency");
        $result = mysql_num_rows($query);
     
        
        ?>
    
                <form method="post" action='assign_offender.php?del=<?php echo $del ?>'>
                 <div class="form-group">
                        <label for="login_select">Select Agency:</label>
                      <!--  <select class="form-control" id="select_agency" name="select_agency" placeholder="Select User" onchange="document.getElementById('selected_agency').value=this.options[this.selectedIndex].text"> -->
                       <select class="form-control" id="agency" name="agency"> 
                            <option disabled selected>Agency Name</option>
                            <?php while($rows = mysql_fetch_array($query)){ 
                            
                            ?>
                            
                            <option value="<?php echo $rows['agency_name']; ?>"><?php echo $rows['agency_name']; ?></option>
                                <?php }?>
                        
       
                        </select>
                    <!-- <input type="hidden" name="selected_agency" id="selected_agency" value="" />  -->
                    </div>
                    <button type="submit" name = "submit_agency" value="Save Changes" class="btn btn-info btn-lg assign">Save Changes</button>
        </form>
        

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