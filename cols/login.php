
<?php 
$connection = mysql_connect("localhost","root","") or die ("Not connected");
mysql_selectdb("madebybeds")or die("Database not found");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
   <style>
       .container{
           margin-top: 3cm;
           margin-left:20cm;
           
       }
       .body {
          
       }
      
       </style>
</head>

<body>
<div class="container">
<div class="row">
    <div class="col-5">
<!--Form without header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3><i class="fa fa-lock"></i> Login:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
      <form method="POST" action="login.php" name="login_form">
        <div class="md-form">
            <i class="fa fa-envelope prefix small"></i>
            <input type="text" id="user_login" class="form-control" name="user_login">
            <label for="form2">Your email/Username</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="password" class="form-control" name="password">
            <label for="form4">Your password</label>
        </div>
          <div class"md-form">
            
            <i class="fa fa-user prefix"></i>
            
          <select class="mdb-select form-control browser-default" id="user_type" name="user_type" ng-model="user_type" onchange="document.getElementById('selected_user').value=this.options[this.selectedIndex].text">
          <option value="" disabled selected>Choose User</option>
          <option value="Individual_project">Student</option>
          <option value="Group_Project">Administrator</option>
         
        </select>
         <input type="hidden" name="selected_user" id="selected_user" value="" />   
        </div>
        <div class="text-center">
            <button class="btn btn-deep-purple" type="submit" name="login">Login</button>
        </div>
    </form>
    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Not a member? <a href="registration.html">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>

</div>
<!--/Form without header-->
    </div>
</div>
</div>

 <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>

    
    <?php 
    if(isset($_POST['user_login']) and isset($_POST['password'])){
       
        
        $user_login =  mysql_real_escape_string($_POST['user_login']);
        $password = $_POST['password'];
        
         $query = mysql_query("select *from users where user_login = '$user_login' AND password = '$password'");
         //$user_type1 = mysql_query("select * from users where user_type = '1'");
         
         //$user_type_count = mysqli_num_rows($user_type1);
         //$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
         $count = mysql_num_rows($query);
        //if ($count == 1 && $user_type_count>0){
         if ($count == 1){
               // $user_type = mysql_query("select user_type from users where user_type = 1");
                $_SESSION['user_login'] = $user_login;
                }else{
                //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
                $fmsg = "Invalid Login Credentials.";
                }
                }
                //3.1.4 if the user is logged in Greets the user with message
                if (isset($_SESSION['user_login'])){
                $user_login = $_SESSION['user_login'];
               header("Location: logged_in_page.php");
                 
                }else{ 
                //3.2 When the user visits the page first time, simple login form will be displayed.
}?>
 
