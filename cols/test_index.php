<?php 
mysql_connect("localhost","root","") or die ("Not connected");

mysql_selectdb("madebybeds")or die("Database not found");

                $sql = "SELECT  *from img_upload";
                $result = mysql_query($sql);

            if ($result == true) {
                    // output data of each row ?>
<!DOCTYPE html>
<html lang="en">
<style>

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
                    <strong>Navbar</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../project_search_result/index.html">Browse Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.html">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login_form.html">Login</a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </nav>
        <!--/.Navbar-->
    </header>

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
                            <p class="card-text"><?php echo  "Decription"; ?></p>
                            <div class="read-more">
                                <a href="#!" class="btn btn-brown">Read more</a>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>

      
                    <!--/.Card-->
                </div>
                                                 <?php  }
            } else {
                echo "0 results";
            }
 ?>
                <!--/.First column-->

                
            <!--/.First row END Delet from here-->

            <!-- 2nd testing row -->
            <!-- testing collamn wrapper div -->
            <div class="_wrapper">
            <div class="row">
                <!--First column-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card-overlay" style="background-image: url('https://mdbootstrap.com/img/Photos/Exposure/Dark/courses.jpg')">

    <!--Content-->
    <div class="white-text text-center">
        <div class="card-block">
            <h5 class="teal-text"><i class="fa fa-pie-chart"></i> Software</h5>
            <h3>Project title</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto .</p>
            <small class="text-muted">Last updated 3 mins ago</small>
            <a class="btn btn-lg btn-white-outline"><i class="fa fa-clone left"></i> View project</a>
        </div>
    </div>
</div>
                    <!--/.Card-->
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-lg-3">
                    <!--Card-->
                   <div class="card-overlay" style="background-image: url('https://mdbootstrap.com/img/Photos/Exposure/Dark/courses.jpg')">

    <!--Content-->
    <div class="white-text text-center">
        <div class="card-block">
            <h5 class="teal-text"><i class="fa fa-pie-chart"></i> Software</h5>
            <h3>Project title</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto .</p>
            <small class="text-muted">Last updated 3 mins ago</small>
            <a class="btn btn-lg btn-white-outline"><i class="fa fa-clone left"></i> View project</a>
        </div>
    </div>
</div>
                    <!--/.Card-->
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card-overlay" style="background-image: url('https://mdbootstrap.com/img/Photos/Exposure/Dark/courses.jpg')">

    <!--Content-->
    <div class="white-text text-center">
        <div class="card-block">
            <h5 class="teal-text"><i class="fa fa-pie-chart"></i> Software</h5>
            <h3>Project title</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto .</p>
            <small class="text-muted">Last updated 3 mins ago</small>
            <a class="btn btn-lg btn-white-outline"><i class="fa fa-clone left"></i> View project</a>
        </div>
    </div>
</div>
                    <!--/.Card-->
                </div>
                <!--/.Third column-->
                
                    <!--4th column-->
                <div class="col-lg-3">
                    <!--Card-->
            <!--Card-->
<div class="card-overlay" style="background-image: url('https://mdbootstrap.com/img/Photos/Exposure/Dark/courses.jpg')">

    <!--Content-->
    <div class="white-text text-center">
        <div class="card-block">
            <h5 class="teal-text"><i class="fa fa-pie-chart"></i> Software</h5>
            <h3>Project title</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto .</p>
            <small class="text-muted">Last updated 3 mins ago</small>
            <a class="btn btn-lg btn-white-outline"><i class="fa fa-clone left"></i> View project</a>
        </div>
    </div>
</div>
<!--/.Card-->
                    <!-- 4th col/.Card-->
                </div>
            </div>
            <!-- close /2nd testing row -->
            </div>
            <!-- closing testing wrapper div  -->
            <div class="row">
                <!--First column-->
                <div class="col-lg-4">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53)" class="img-fluid" alt="">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="read-more">
                                <a href="#!" class="btn btn-brown">Read more</a>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-lg-4">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(49)" class="img-fluid" alt="">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="read-more">
                                <a href="#!" class="btn btn-brown">Read more</a>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second column-->

                <!--Third column-->
                <div class="col-lg-4">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51)" class="img-fluid" alt="">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="read-more">
                                <a href="#!" class="btn btn-brown">Read more</a>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--/.Third column-->
            </div>
            <!--/.Second row-->
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

</html>