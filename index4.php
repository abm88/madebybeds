<!DOCTYPE html>
<html lang="en">
  <head>
  
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Made By Beds</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
      <style>
    html, body {
   margin: 0px;
   padding: 0px;
   max-width: 100%;
   max-height: 100%;
}

body {
 font-size: 14px;
}
body, h1, h2, h3, h4, h5, h6 {
 font-family: helvetica, arial, sans-serif;
}

.logo {
 width: 190px;
    height:79px;
  
    padding-bottom: 15px;
    padding-right: 15px;
    right: 150px;
    top: -5px;
    position: relative;
    
   
}
      
.navbar-collapse a {
 text-transform: uppercase;
}

.navbar-collapse li {
 padding-top: 20px;
 padding-bottom: 20px;
}

.container {
 max-width: 960px;
}

.btn {
 border-radius: 3em;
 margin-bottom: 40px;
}
.navbar {
 background: transparent;
 border: none;
 padding: 0.5em 0;
 margin-bottom: 0;
}
.navbar .navbar-brand {
 color: #000;
 font-family: georgia, serif;
 font-weight: bold;
}
.navbar ul.nav li a {
 color: #111;
 padding-left: 0;
 padding-right: 0;
 margin: 0 1.5em;
}
.navbar ul.nav li a:hover {
 color: #000;
}
.navbar ul.nav li button {
 margin: 0.7em 0 0 1em;
}
.col-md-4 {
 text-align: center;
}
.feature-photo {
 width: 50px;
}
.feature-text h3 {
 margin: 0;
 font-size: 2em;
 font-weight: bold;
}
.feature-text p {
 line-height: 1.5em;
 margin: 1em 0;
}
.spacer {
 margin: 3em 0;
}
.jumbotron {
 background: #f0f0f0;
 background-image: url(http://habrastorage.org/files/457/692/645/4576926453e2490faad00da3cd10ab00.jpeg);
 background-size: 100%;
 background-position: center center;
 background-repeat: no-repeat;
 color: #333;
 padding-top: 2em;
 height: 420px !important;
 text-align: center;
 margin: 0;
}
.jumbotron h1 {
 font-size: 2.5em;
 font-weight: 800;
 color: #fff;
 margin-bottom: 0;
 padding: 0.5em;
 text-transform: uppercase;
}
.jumbotron h2 {
 color: #fff;
 font-size: 0.75em;
 font-weight: normal;
 padding: 0.75em 1.1em;
 line-height: 1.4em;
 max-width: 66%;
 margin: 0 auto;
}
.jumbotron .btn {
 margin: 0 auto;
 padding: 15px 30px;
 text-transform: uppercase;
 margin-top: 20px;
}
.feature	{
color: #999999;
font-family: arial, sans-serif;
font-size: 20px;
font-weight: bold;
margin-top: 0px;
margin-bottom: 1px;
    position: absolute;
    left: 40px;
}
      </style>
  </head>
  <body>
      
         <nav class="navbar navbar-default" role="navigation">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand nav-link" href="#top"><img src="http://static1.squarespace.com/static/510d3432e4b0c0190c331ea8/t/521cd1bee4b07106b05c8db4/1377612254292/bedfordshire_6303599_2_.jpg" class="logo"></a>
       </div> <!-- /.navbar-header -->

       <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="#">Home</a></li>
           <li><a href="#">About</a></li>
           <li><a href="#">Festival Gallary</a></li>
           <li><a href="#">Students Projects</a></li>
           <li><a href="project_upload.php">Sign up</a></li>
           
         </ul>
       </div> <!-- /.navbar-collapse -->
     </div> <!-- /.container -->
   </nav> <!-- /.navbar -->

   <div class="jumbotron">
     <div class="container">
       <h1 class="text-center">Creative digital <br>Projects</h1>
       <h2 class="text-center">The bright work done by Beds students</h2>
       <a href="#" class="btn btn-success btn-large">View all projects</a>
     </div> <!-- /.container -->
   </div> <!-- /.jumbotron -->
      <div class="spacer"></div>
<h1 id="feature" class="feature">The Projects go here</h1>
   <div class="spacer"></div>

  <!-- Carassal ends -->
     
 <!-- Reference: https://github.com/ashleydw/lightbox/ -->
<script src="//rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.js"></script>
 
<div class="container-fluid">
    <section class="row">

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                        <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                    <span class="pull-right">
                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                    </span>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/food/2" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                        <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Food Portfolio">Food</a></h4>
                    <span class="pull-right">
                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                    </span>
                    
                </div>
                
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/sports/3" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                        <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                    <span class="pull-right">
                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                    </span>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/people/1" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                        <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="People Portfolio">People</a></h4>  
                    <span class="pull-right">
                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                    </span>
                </div>
            </div>
        </article>                                              

</section>
</div>
<!--- Added more lightboxes here -->
<h1 id="feature" class="feature">Feature work</h1>
      <div class="spacer"></div>
<div class="container">
    
    <section class="row">
        

         <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-10 col-xs-3">
    <div class="hovereffect">
        <img class="img-responsive" src="project_image.jpg" alt="">
        <div class="overlay">
           <h2>Robotics</h2>
            
           <a class="info" href="#">View this work</a>
        </div>
    </div>
</div>
     <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-10 col-xs-3">
    <div class="hovereffect">
        <img class="img-responsive" src="project_image.jpg" alt="">
        <div class="overlay">
           <h2>Mobie App</h2>
            
           <a class="info" href="#">View this work</a>
        </div>
    </div>
</div>
          <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-10 col-xs-3">
    <div class="hovereffect">
        <img class="img-responsive" src="project_image.jpg" alt="">
        <div class="overlay">
           <h2>Web Project</h2>
            
           <a class="info" href="#">View this work</a>
        </div>
    </div>
</div>
</div>
             </div>
        </div>
    </section>
      </div>
         <div class="spacer"></div>
      
<!-- adding mreo lightboxes here too -->
<div class="container-fluid">
    <section class="row">

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                        <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                    <span class="pull-right">
                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                    </span>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/food/2" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                        <img src="project_image.jpg" alt="Food Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Food Portfolio">Food</a></h4>
                    <span class="pull-right">
                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                    </span>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/sports/3" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                        <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                    <span class="pull-right">
                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                    </span>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="http://lorempixel.com/350/350/people/1" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                        <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="People Portfolio">People</a></h4>  
                    <span class="pull-right">
                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                    </span>
                </div>
            </div>
        </article>                                              

</section>
</div>

  
  <?php include('footer.php'); ?>
    
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
      
      <!-- picture box js file -->
      <script>
$(document).ready(function() {              
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var $this = $(this),
        c = $this.data('count');    
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });      
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
}); 
</script>      
      <!-- picture box js file ends here -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>