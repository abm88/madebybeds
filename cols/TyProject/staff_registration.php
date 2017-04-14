<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ex-Offenders DB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
    
    $(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
    </script>
    <style>
    
    /* Credit to bootsnipp.com for the css for the color graph */
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
    <?php 
   
        include('db.php');
        if($db_found){
            if(isset($_POST['staff_registration'])){
                 $staff_login = @($_POST['staff_login']);
                 $staff_first_name = @($_POST['staff_first_name']);
                 $staff_last_name = @($_POST['staff_last_name']);
                 $staff_gender = @($_POST['staff_gender']);
                 $staff_address = @($_POST['staff_address']);
                 $staff_email = @($_POST['staff_email']);
                 $staff_password = @($_POST['staff_password']);
                 

            if($staff_login != '' && $staff_first_name != "" && $staff_last_name!="" && $staff_gender !="" && $staff_address !="" && $staff_email !="" && $staff_password !="") {
       
                    $sql  = "INSERT INTO staff (staff_login,staff_first_name, staff_last_name, 
                            staff_gender, staff_address, staff_email, staff_password, staff_register_date)  VALUES('$staff_login','$staff_first_name','$staff_last_name', '$staff_gender', '$staff_address', '$staff_email', '$staff_password',  NOW())";

                        $result = mysql_query($sql);
                            if($result){
                                echo "Records added successfully.";      
                                    
                            } 
                                    else { echo "ERROR: Could not able to execute ";  } 

                        
    } /* not empty if */ else {echo'enter data';}
     } /* register if*/
    } else{("db not fount ");
        
    }
    
    
    
    ?>

</head>
<body>
<div class="container"> 
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="staff.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Staff Registeration</h2>   </center>   
    <p align="center">Allow Staff Member to access system by creating their profile</p>
  </div>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" action="staff_registration.php">
			<h2>Create Staff <small>Allowing staff member to use system </small></h2>
			<hr class="colorgraph">
			<div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                        <div class="form-group">
                            <input type="text" name="staff_login" id="staff_login" class="form-control input-lg" placeholder="User Login" tabindex="1">
                        </div>
                </div>
            </div>
            <div class="row">
                
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="staff_first_name" id="staff_first_name" class="form-control input-lg" placeholder="First Name" tabindex="2">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="staff_last_name" id="staff_last_name" class="form-control input-lg" placeholder="Last Name" tabindex="3">
					</div>
				</div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <label for="gender">Select gender:</label>
                        <select class="form-control" id="staff_gender" placeholder="Select Gender" name="staff_gender">
                            <option value="staff_gender" disabled selected>Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Confidential</option>
       
                        </select>
                </div>
                </div>
			</div>
			<div class="form-group">
				<input type="text" name="staff_address" id="staff_address" class="form-control input-lg" placeholder="Address" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="staff_email" id="staff_email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="staff_password" id="staff_password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Create staff</strong>, you are allowing staff member to the system more read <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by offender management system.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Create staff" class="btn btn-primary btn-block btn-lg" tabindex="7" name="staff_registration"></div>
				<div class="col-xs-12 col-md-6"><a href="index.html" class="btn btn-danger btn-block btn-lg">Close</a></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<h2>Help</h2>
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Affliated Agencies</div>
      <div class="panel-body">Affliated Organisations</div>
        </div>
            </div>
    </div>
</body>
</html>
