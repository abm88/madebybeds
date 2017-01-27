<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
var activeElement = 0;//select default tab
$(function() {
    var items = $('.btn-nav');
    $( items[activeElement] ).addClass('active');
    $( ".btn-nav" ).click(function() {
        $( items[activeElement] ).removeClass('active');
        $( this ).addClass('active');
        activeElement = $( ".btn-nav" ).index( this );
    });
});

</script>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Made By Beds</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="navbar.css">
      <style>
      .modal-dialog {width:600px;}
      .thumbnail {margin-bottom:6px;}
      </style>
      <script src="navbar.js"></script>
  </head>
  <body>
      
<!--NAVBAR-->
<nav class="[ navbar navbar-fixed-top ][ navbar-bootsnipp animate ]" role="navigation">
    <!--Mobile Menu-->
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!--Desktop/Tablet Menu-->
    <div class="collapse navbar-collapse js-navbar-collapse">
        <div class="container">
            <div class="row">
                <div class="btn-group btn-group-justified">
                    <!--Home-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-home"></span>
                            <p id="home">Home</p>
                        </button>
                    </div>
                    <!--Wiki-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-book"></span>
                            <p id="wiki">Wiki <span class="caret"></span></p>
                        </button>
                        <ul class="dropdown-menu multi-column columns-4">
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                                <a href="#" style="float:right;padding-right:25px">See All</a>
                            </li>
                        </ul>
                    </div>
                    <!--TechTicket-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-ok-sign"></span>
                            <p id="techtickets">TechTicket</p>
                        </button>
                    </div>
                    <!--Reports-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-stats"></span>
                            <p id="reports">Reports</p>
                        </button>
                    </div>
                    <!--News-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-bell"></span>
                            <p id="news">News</p>
                        </button>
                    </div>
                    <!--Calendar-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-calendar"></span>
                            <p id="calendar">Calendar</p>
                        </button>
                    </div>
                    <!--Profile-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-user"></span>
                            <p id="profile">Profile</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
      <div class="container">
  <!-- Carassal -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://synicsys.com/wp-content/uploads/2014/08/seo-banner-bgd.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3>Robotics</h3>
                    <p>The project was compiled by third year studentes at beds</p>
                </div>
            </div>
            <div class="item">
                <img src="http://allpoints.ph/wp-content/uploads/2013/10/banner.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3>Computer Science</h3>
                    <p>UnderGraduate final year project</p>
                </div>
            </div>
            <div class="item">
                <img src="http://www.nimble-solution.com/images/slider/banner4.png" alt="Flower">
                <div class="carousel-caption">
                    <h3>Graphics Design</h3>
                    <p>he project was compiled by third year studentes at beds</p>
                </div>
            </div>
             <div class="item">
                <img src="http://www.nimble-solution.com/images/slider/banner4.png" alt="Flower">
                <div class="carousel-caption">
                    <h3>Electronics</h3>
                    <p>UnderGraduate final year project</p>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
    </div>

  <!-- Carassal ends -->
 <div class="container">
  <div class="row">
    <h1>Bootstrap 3 Lightbox image gallery using Modal</h1>
   
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/2255EE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 4" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/2255EE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/777"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 10" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/EEE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 11" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/DDD"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 13" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
   
    <hr>
    
    <hr>
  </div>
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">
		
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>



  <h2>More About</h2>
          
  <div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
    <div class="panel-body">Panel Content</div>
    <div class="panel-footer">Panel Footer</div>
  </div>
          </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
          <script type="text/javascript">
      $(function() { 

    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
		event.preventDefault();
		$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
		$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
		$('a[href="#toggle-search"]').closest('li').toggleClass('active');

		if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
			setTimeout(function() { 
				$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
			}, 100);
		}			
	});

	$(document).on('keyup', function(event) {
		if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			$('a[href="#toggle-search"]').trigger('click');
		}
	});
    
});
      </script>
<script>
$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});
</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>