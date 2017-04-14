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
    if(isset($_POST['agency_request'])){
                 $r_agency_login = @($_POST['r_agency_login']);
                 $r_agency_password = @($_POST['r_agency_password']);
                 $r_agency_name = @($_POST['r_agency_name']);
                 $r_agency_type = @($_POST['r_agency_type']);
                 $r_agency_address = @($_POST['r_agency_address']);
                 $r_agency_email = @($_POST['r_agency_email']);
                 $r_agency_contact_person = @($_POST['r_agency_contact_person']);
                 $r_agency_phone_number = @($_POST['r_agency_phone_number']);
                 $r_agency_agrement = @($_POST['r_agency_agrement']);
                 
                 //s$_password = @($_POST['_password']);
                 

            if($r_agency_login != '' && $r_agency_password != '' && $r_agency_name != '' && $r_agency_type != "" && $r_agency_address!="" && $r_agency_email !="" && $r_agency_contact_person !="" && $r_agency_phone_number !='') {
                        if (isset($_POST['r_agency_agrement']) && ($_POST['r_agency_agrement'] == "yes")) {
                    $sql  = "INSERT INTO agency_request (r_agency_login, r_agency_password ,r_agency_name, r_agency_type, r_agency_address, 
                            r_agency_email, r_agency_contact_person, r_agency_phone_number,  r_agency_agrement, r_agency_date)  VALUES('$r_agency_login','$r_agency_password','$r_agency_name','$r_agency_type','$r_agency_address', '$r_agency_email', '$r_agency_contact_person', '$r_agency_phone_number', '$r_agency_agrement', NOW())";

                        $result = mysql_query($sql);
                            if($result){
                                echo "Records added successfully.";      
                                    
                            } 
                                    else { echo "ERROR: Could not able to execute ";  } 

                        
    } /*agreement */ else {echo ' You have to be agreed to terms and conditions Thanks.';}
     }  /* not empty if */ else {echo'enter data';}
    } /* register if*/
    } else{("db not fount ");  } 
       
    ?>

</head>
<body>
<div class="container"> 
  <!-- Modal Successful Request -->
<div class="modal fade" id="successful_registeration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Your Request is Successful</h4>
			</div>
			<div class="modal-body">
                <p><div class="alert alert-success">
  <strong>Success!</strong> We will be back to you soon once we go through background check thanks for your patiance.
</div> </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Affliation request form</h2>   </center>   
    
  </div>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" action="agency_request.php">
			<h2>Affliation request <small>All fields are modatory </small></h2>
			<hr class="colorgraph">
            
            <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="r_agency_login" id="r_agency_login" class="form-control input-lg" placeholder="Prefered Login" tabindex="1">
					</div>
				</div>
            </div>
            
             <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="password" name="r_agency_password" id="r_agency_password" class="form-control input-lg" placeholder="Prefered Password" tabindex="1">
					</div>
				</div>
            </div>
            
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="r_agency_name" id="r_agency_name" class="form-control input-lg" placeholder="Agency Name" tabindex="1">
					</div>
				</div>
            </div>
            <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="r_agency_type" id="r_agency_type" class="form-control input-lg" placeholder="Agency type" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="r_agency_address" id="r_agency_address" class="form-control input-lg" placeholder="Agency Address" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="r_agency_email" id="r_agency_email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="r_agency_contact_person" id="r_agency_contact_person" class="form-control input-lg" placeholder="Contact Person name" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-7">
					<div class="form-group">
						<input type="text" name="r_agency_phone_number" id="r_agency_phone_number" class="form-control input-lg" placeholder="Phone Number (+44)51xx" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="r_agency_agrement" id="r_agency_agrement" class="hidden" value="yes">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Submit request</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> of offender management system.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit"  value="Submit Request" class="btn btn-primary btn-block btn-lg" tabindex="7" data-toggle="modal" data-target="#successful_registeration" name="agency_request" id="agency_request"></div>
				<div class="col-xs-12 col-md-6"><a href="index.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
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
      <div class="panel-heading">Services</div>
      <div class="panel-body">
          Affliated Organisations.<br>
          Contact    
        </div>
        
        </div>
            </div>
    </div>
</body>
</html>
