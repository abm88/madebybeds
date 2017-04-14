<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ex-Offenders DB</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <style type="text/css">
        /* css for login form */
            .form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
        
    
    /*  css for the color graph */
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
  <!-- Modal Successful Request 
            
        Modal for terms and condition removed
     
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="user.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Welcome to Ex-Offedner Management System</h2>   </center>   
    
  </div>
    </div>
<div class="container">
    <div class="row">
        
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Ex-Offenders DataBase</h1>
            <div class="account-wall">
                <img class="profile-img" src="admin_login.png"
                    alt="">
                
                <form class="form-signin" method="post" action="core_test.php">
                 <div class="form-group">
                        <label for="login_select">Login as:</label>
                        <select class="form-control" id="login_select" name="login_select" placeholder="Select User" onchange="document.getElementById('selected_user').value=this.options[this.selectedIndex].text">
                            <option value="0" disabled selected>Login</option>
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">Agency</option>
       
                        </select>
                     <input type="hidden" name="selected_user" id="selected_user" value="" />
                </div>
                <input type="text" class="form-control" name="user_login" id="user_login" placeholder="Email" required autofocus>
                <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password" required>
                    
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Forgot password ? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create User</a>
        </div>
   
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
