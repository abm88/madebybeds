
<?php 
mysql_connect("localhost","root","") or die ("Not connected");
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
      <form method="POST" action="login.php" name="login">
        <div class="md-form">
            <i class="fa fa-envelope prefix small"></i>
            <input type="text" id="form2" class="form-control" name="user_name">
            <label for="form2">Your email/Username</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control" name="password">
            <label for="form4">Your password</label>
        </div>
          <div class"md-form">
            
            <i class="fa fa-user prefix"></i>
            
          <select class="mdb-select form-control browser-default" id="user_type" name="user_type" ng-model="user_type">
          <option value="" disabled selected>Choose User</option>
          <option value="Individual_project">Student</option>
          <option value="Group_Project">Admin</option>
         
    </select>
            
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
    if(isset($_POST['login'])){
       
        
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
         $query = mysql_query("select *from users where user_login = '$user_name'");
         
        while($row = mysql_fetch_array($query)){
            $count = count($query);
         
            if($count>0){
               $query = mysql_query("select *from users where password = '$password'");
                    $count1 = count($query);
                    if ($count1>0) {
                        header("Location: test_index.php");
                    } else {
                        echo 'Wrong Password';
                    }
               
            }else {
               
                echo ' No Such User Found';
            }
             
              break;
         }
        
    }

?>