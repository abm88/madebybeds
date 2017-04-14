<html>
<head>
    <title>Agency Athentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <script>
    
    </script>
    <?php 

    include('db.php');
   
  if (isset($_GET['del'])) { 
  $del = $_GET['del'];
   
           
          $query = mysql_query("select *from offender where offender_id = $del;");
        while ($row1 = mysql_fetch_array($query)) { 
           // $id = row1['offender_id'];
            $oid = $row1['offender_id'];
            $first_name = $row1['offender_first_name'];
            $last_name = $row1['offender_last_name'];
            $gender = $row1['offender_gender'];
            $address= $row1['offender_address'];
            $type = $row1['offence_type'];
            $admitance_date = $row1['offender_admit_date'];
            $comment = $row1['other_comments'];
}
        ?>
   <style>
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}
       .jumbotron {
                background-color: aliceblue;
 
        }
      .exit{
          margin: 20px;
          width: 80px;
          height: 40px;
          border: fix;
          padding: 20px;
          border-radius: 0px;
      }
      .btn{
         
          width: 80px;
          height: 40px;
          border: fix;
          padding: 8px;
          border-radius: 0px;
      }

    </style> 
    </head>
<body>
<div class="container">
      <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Profile</h2>    
    <p>Offender' profile and details.</p>
    </center>  
  </div>
    </div>
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           

        <A href="index.php" >Logout</A>
       <br>
<p class=" text-info"><?php echo date("l"). " " . date("Y/m/d") . "<br>"; ?> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $first_name.' '.$last_name; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="user.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Catagory:</td>
                        <td><?php echo $type; ?></td>
                      </tr>
                      <tr>
                        <td>Admitance date:</td>
                        <td><?php echo $admitance_date; ?></td>
                      </tr>
                    
                        <tr>
                        <td>Home Address</td>
                        <td><?php echo $address; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $gender; ?></td>
                      </tr>
                        
                      
                        <td>Other Comments:</td>
                        <td><?php echo $comment; ?><br>
                        </td>
                           
                      </tr>
                   
                    </tbody>
                  </table>
                
                   <form method="get" action="manage_individual_offender.php">
                  <a href="offender_list_admin.php" class="btn btn-info">Return to list</a>
               
                       <?php echo "<b><a href=\"manage_individual_offender.php?release={$oid}\"><input type=\"button\" value=\"Manage\"/ class=\"btn btn-success btn-lg\" id=\"del\" /> </a>"; ?>
                </form>
                </div>
              </div>
               <?php }?>
              
           
            </div>
                 <div class="panel-footer">
                     <small>Ex-offender management system</small>
                        
                            
                       
                    </div>
            
          </div>
        </div>
    
      </div>
    </div>
        <center>
    <a href="admin.php"><input type="button" value="Exit " class="btn btn-primary btn-lg exit"></a>
    </center>
<div class="container">
<div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
    </div>
    </body>

</html>