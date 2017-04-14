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
    $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
    </script>
    <?php 

    include('db.php');
   
  if (isset($_GET['del'])) { 
  $del = $_GET['del'];
   
           
          $query = mysql_query("select *from agency where agency_id = $del;");
        while ($row1 = mysql_fetch_array($query)) { 
            $agency_name = $row1['agency_name'];
            $agency_type= $row1['agency_type'];
            $agency_email= $row1['agency_email'];
            $agency_address= $row1['agency_address'];
            $agency_contact_person = $row1['agency_contact_person'];
            $agency_phone_number = $row1['agency_phone_number'];
            $register_date = $row1['agency_registerd_date'];
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
           <h2>Agency Profile</h2>    
    <p>Agency's profile and details.</p>
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
              <h3 class="panel-title"><?php echo $agency_name; ?></h3>
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
                        <td>Agency Type:</td>
                        <td><?php echo $agency_type; ?></td>
                      </tr>
                      <tr>
                        <td>Registerd:</td>
                        <td><?php echo $register_date; ?></td>
                      </tr>
                    
                        <tr>
                        <td>Main Address</td>
                        <td><?php echo $agency_address; ?></td>
                      </tr>
                   
                       
                        <tr>
                        <td>E-mail</td>
                        <td><?php echo $agency_email; ?></td>
                      </tr>
                        
                         <tr>
                        <td>Phone Number</td>
                        <td><?php echo $agency_phone_number; ?></td>
                      </tr>
                        
                        
                        <tr>
                        <td>Contact Person:</td>
                        <td><?php echo $agency_contact_person; ?><br>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  <?php }?>
                  <a href="admin.php" class="btn btn-info">Return</a>
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                     <small>Ex-offender management system</small>
                        
                            
                       
                    </div>
            
          </div>
        </div>
    
      </div>
    </div>
        <center>
  
    </center>
<div class="container">
<div class="panel panel-info">
      <div class="panel-heading">Quick info</div>
      <div class="panel-body">Ex-offender tracking system</div>
    </div>
    </div>
    </body>

</html>