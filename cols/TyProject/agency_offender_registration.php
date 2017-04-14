<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex-Offenders DB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <?php 
        $user_name = "root";
        $password = "";
        $database = "ex_offenders";
        $server = "localhost";

        mysql_connect($server, $user_name, $password);

    $db_found = mysql_select_db($database);
    if($db_found){
    if(isset($_POST['register'])){
         $offender_first_name = @($_POST['offender_first_name']);
         $offender_last_name = @($_POST['offender_last_name']);
         $offender_gender = @($_POST['gender']);
         $offender_address = @($_POST['offender_address']);
         $offender_offence_type = @($_POST['offender_offence_type']);
         $offender_agency = @($_POST['offender_agency']);
         $offender_catagory = @($_POST['offender_catagory']);
         $offender_comments = @($_POST['offender_comments']);
            
            if($offender_first_name != '' && $offender_last_name != "" && $offender_gender!="" && $offender_address !="" && $offender_offence_type !="" && $offender_agency !="" && $offender_catagory !="" && $offender_comments !="") {
       
                    $sql  = "INSERT INTO offender (offender_first_name,offender_last_name, offender_gender, 
                            offender_address, offence_type, offender_agency, offender_catagory,  other_comments, offender_admit_date)  VALUES('$offender_first_name','$offender_last_name','$offender_gender', '$offender_address', '$offender_offence_type', '$offender_agency', '$offender_catagory', '$offender_comments', NOW())";

                        $result = mysql_query($sql);
                            if($result){
                                echo "Records added successfully.";      
                                    
                            } 
                                    else { echo "ERROR: Could not able to execute ";  } 

                        
    } /* not empty if */ else {echo'enter data';}
     } /* register if*/
    } else("db not found")
    
    ?>
  
   
    <style>
    
   
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
    </style>
</head>
<body>
<div class="container"> 
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Create offender profile</h2>   </center>   
    <p align="center">Adding an offender to the system will allow staff member to get feeds and updates</p>
  </div>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" action="offender_registeration.php">
			<h2>Create offender</h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="offender_first_name" id="offender_last_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="offender_last_name" id="offender_last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
                <div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <label for="gender">Select gender:</label>
                        <select class="form-control" id="gender" name="gender" placeholder="Select Gender">
                            <option value="test" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="confidential">Confidential</option>
       
                        </select>
                </div>
                </div>
			</div>
			<div class="form-group">
				<input type="text" name="offender_address" id="offender_address" class="form-control input-lg" placeholder="Address" tabindex="3">
			</div>
			<div class="form-group">
				<input type="text" name="offender_offence_type" id="offender_offence_type" class="form-control input-lg" placeholder="Offence type" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="offender_agency" id="offender_agency" class="form-control input-lg" placeholder="admit by" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="offender_catagory" id="offender_catagory" class="form-control input-lg" placeholder="offender Catagory " tabindex="6">
					</div>
				</div>
                
                
			</div>
            <div class="form-group">
                <label for="comments">Any other comments:</label>
                <textarea name="offender_comments" id="offender_comments" class="form-control input-lg"  tabindex="3" placeholder="comments"> </textarea>
			</div>
			
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7" id="register" name="register"></div>
				<div class="col-xs-12 col-md-6"><a href="index.html" class="btn btn-danger btn-block btn-lg">Dismiss</a></div>
			</div>
		</form>
	</div>
</div>

</div>
<h2>Help</h2>
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Affliated Agencies</div>
      <div class="panel-body">Affliated Organisations</div>
        </div>
            </div>
    </div>
    
    <!-- Modal -->
    
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>


    <!--Modal -->
    
</body>
</html>
