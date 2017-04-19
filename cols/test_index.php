<?php 
mysql_connect("localhost","root","") or die ("Not connected");

mysql_selectdb("madebybeds")or die("Database not found");

                $sql = "SELECT  *from img_upload limit 12";
                $result = mysql_query($sql);

            if ($result == true) {
                    // output data of each row ?>
<!DOCTYPE html>
<html lang="en">
<style>
#mask {

  position: absolute;
  left: 0;
  top: 0;
  z-index: 9000;
  background-color: #000;
  display: none;
}

#boxes .window {
  position: absolute;
  left: 0;
  top: 0;
  width: 440px;
  height: 200px;
  display: none;
  z-index: 9999;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
}

#boxes #dialog {
  width: 750px;
  height: 300px;
  padding: 10px;
  background-color: #ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

#popupfoot {
  font-size: 16pt;
  position: absolute;
  bottom: 0px;
  width: 250px;
  left: 180px;
  margin-bottom: 1cm;
}

</style>
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
    <!-- Main CSS file design -->
     <link href="css/style.css" rel="stylesheet">
   
</head>

<body>

    <header>
        <!--Navbar-->
        <nav class="navbar navbar-toggleable-md navbar-dark">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <strong>MadeByBeds</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="../project_search_result/index.html">Browse Projects</a>
                        </li> -->
                         <li class="nav-item">
                            <a class="nav-link" href="responsive_grid.php">Browse Projects</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </nav>
        <!--/.Navbar-->
    </header>
<div id="boxes">
  <div id="dialog" class="window">
    <h3>Dear User,</h3>
    <p align="left">You are using <b>beta</b> version of Beds projects showcase which is still under development and testing where some components may not work properly.<br><br><br><b>Please</b> leave us feedbacks, your feedbacks will help us to improve system performance and functionality.</p>
    <div id="popupfoot"> <a href="#" class="close agree"> I agree </a>  </div>
  </div>
  <div id="mask"></div>
</div>

    <main>
        <!--Main layout-->
        <div class="container">

    <!--- Search filters -->
    <div class="_search_filter_wrapper">
    <div class="row">
    <div class="col-lg-4 col-md-3">
     <form action="#">
 
  <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>
    
  </div>
   
</form> 
    </div>
    
    <div class="col-lg-4 col-md-3">
     <form action="#">
  <div class="select-box">
   <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>   
  </div>
   
</form> 
    </div>
    <div class="col-lg-4 col-md-3">
      <form action="#">
  <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>
    
  </div>
   
</form> 
    </div>
  </div>
    </div> <!-- Search Wrapper class END -->
   <!-- Search filter closing -->
      
   <!--Page heading-->
            <div class="row">
                <div class="col-md-12">

    
                    <h1 class="h1-responsive">Made By
                        <small class="text-muted">Creative students </small>
                    </h1>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <!--First row-->
            <div class="row">
             
                    <?php
                    while($row = mysql_fetch_assoc($result)) {
                   
                        ?><!--<img src="<?php //echo  $row["img_path"]; ?>" alt="Smiley face" height="100" width="100"> -->
                <!--First column-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card">
                    
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            
                            <img src="<?php echo  $row["img_path"]; ?>" class="img-fluid" alt="">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                            
                  </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title"><?php echo  "Title" ?></h4>
                            <!--Text-->
                            <p class="card-text"><?php echo  $row["description"]; ?></p>
                            <form action="project_details.php" method="get">
                            <div class="read-more">
                                <?php echo "<a href=\"project_details.php?del={$row['id']}\" class=\"btn btn-brown\" id=\"del\">Read more</a>";?>
                            </div>
                            </form>
                        </div>
                        <!--/.Card content-->

                    </div>

      
                    <!--/.Card-->
                </div>
             <?php  }
                       } else { echo "0 results";     } ?>
                <!--/.First column-->

                
            <!--/.First row END Delet from here-->

          </div>
            <hr>

            <!--Pagination-->
            <nav class="row flex-center">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#!" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#!">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item"><a class="page-link" href="#!">4</a></li>
                    <li class="page-item"><a class="page-link" href="#!">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#!" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--/.Pagination-->
        </div>
        <!--/.Main layout-->
    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only">
        <!--Footer links-->
        <div class="container-fluid">
            <div class="row">
                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">About MadebyBeds</h5>
                    <p><b>University of Bedforshire Showcase</b> Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>
                   
                </div>
                <!--/.First column-->
                <hr class="hidden-md-up">
                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">First column</h5>
                    <ul>
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->
                <hr class="hidden-md-up">
                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Second column</h5>
                    <ul>
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Third column-->
                <hr class="hidden-md-up">
                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Third column</h5>
                    <ul>
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer links-->
        <hr>
        <!--Call to action-->
        <div class="call-to-action">
            <h4>Material Design for MadeByBeds</h4>
            <ul>
                <li>
                    <h5>Get our registration for free</h5>
                </li>
                <li>
                    <a target="_blank" href="http://mdbootstrap.com/getting-started/" rel="nofollow" class="btn btn-default waves-effect waves-light">Sign up!</a>
                </li>
                <li>
                    <a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" rel="nofollow" class="btn btn-primary waves-effect waves-light">Learn more</a>
                </li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="containter-fluid">
                © 2017 Copyright: <a href="http://www.opacks.com" rel="nofollow"> Abdul Basith </a>
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
<script>
$(document).ready(function() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});

});
</script>
</html>