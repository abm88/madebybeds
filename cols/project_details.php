<?php 
mysql_connect("localhost","root","") or die ("Not connected");

mysql_selectdb("madebybeds")or die("Database not found"); 

 if (isset($_GET['del'])) { 
  $del = $_GET['del'];
   
           
          $query = mysql_query("select *from img_upload where id = $del;");
        while ($row1 = mysql_fetch_array($query)) { 
            $project_image = $row1['img_path'];
            $project_description = $row1['description'];
            $project_url = $row1['project_video_url'];
            //$video = mysql_real_escape_string($project_url);
            
            ?>

<html>
    <head>
       
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Meterializcss cdn-->
        <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
          
        <!--Boostrap 4 CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- Boostrap CDN Close -->
        <link href="..6/include/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                background-color: #d7dce2;
            }
            .left_side_panel_menu{
                 margin-top: 4cm;
                 padding-top: 0.3cm;
                 padding-left: 0.3cm;
                 padding-right: 0.3cm;
                 padding-bottom: 0.3cm;
                 background-color: white;
               
               
            }
            .col-6 { 
                background-color: white;                   
                margin-left: 0.5cm;
                margin-top: 4cm;
                padding-top: 0.3cm;
                padding-left: 0.3cm;
                padding-right: 0.3cm;
                padding-bottom: 0.3cm; 
              
            }
            .center_panel_details {
               
                 
            }
            .right_side_panel_related_projects{
                background-color: white;
                margin-top: 6cm;
                padding-top: 0.3cm;
                padding-left: 0.3cm;
                padding-right: 0.3cm;
                padding-bottom: 0.3cm;
                
            }
            .footer {
              
              height: 2cm;
              margin: 0.5cm;
            }
            .recent_projects{
              background-color: white;
              height: 2cm;
            }
            /*  Related projects  */
            /* image thumbnail */
.thumb {
    display: block;
	width: 100%;
	margin: 0;
}

/* Style to article Author */
.by-author {
	font-style: italic;
	line-height: 1.3;
	color: #aab6aa;
}

/* Main Article [Module]
-------------------------------------
* Featured Article Thumbnail
* have a image and a text title.
*/
.featured-article {
	width: 482px;
	height: 350px;
	position: relative;
	margin-bottom: 1em;
}

.featured-article .block-title {
	/* Position & Box Model */
	position: absolute;
	bottom: 0;
	left: 0;
	z-index: 1;
	/* background */
	background: rgba(0,0,0,0.7);
	/* Width/Height */
	padding: .5em;
	width: 100%;
	/* Text color */
	color: #fff;
}

.featured-article .block-title h2 {
	margin: 0;
}
.w3-container{
    margin-top:1cm;
}
/* Featured Articles List [BS3]
--------------------------------------------
* show the last 3 articles post
*/

.main-list {
	padding-left: .5em;
}

.main-list .media {
	padding-bottom: 1.1em;
	border-bottom: 1px solid #e8e8e8;
}
            /* End related projects */
            </style>
        <title></title>
    </head>
    <body>
        
        <div class="container-fluid">

            <h1 align="center">Project Name</h1>
            <div class="row"> <!-- Row start -->
                       

            <div class="col">
            <div class="left_side_panel_menu">

                
                    <p><small><i><?php echo "Menu" ?></i></small></p>
        <ul class="collection">
        <li class="collection-item dismissable"><div>Details<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
      </ul>

                <p><small><i>Description</i></small></p>
                <ul class="list-group">
                      <li class="list-group-item justify-content-between glyphicon glyphicon-menu-right">
                        Cras justo odio
                        <span class="glyphicon glyphicon-menu-right"></span>
                      </li>
                      <li class="list-group-item justify-content-between">
                        Dapibus ac facilisis in
                        <span class="badge badge-default badge-pill">2</span>
                      </li>
                      <li class="list-group-item justify-content-between">
                        Morbi leo risus
                        <span class="badge badge-default badge-pill">1</span>
                      </li>
                    </ul>

            </div>
            </div>
            <div class="col-6">
            <div class="center_panel_details">
              
               
               <div class="w3-third">
                      <div class="w3-card-2">
                        <img src="<?php echo $project_image; ?>" style="width:100%">
                        <div class="w3-container">
                          <p><?php echo $project_description; ?></p>
                          
                        </div>
                      </div>
                    </div>
                        <div class="col6"></div>           
               <h4 align="center">Porfolio Vedio</h4>
                          <center>
                              
                              <iframe width="420" height="345" src="https://www.youtube.com/embed/<?php echo $project_url; ?>">
                                </iframe>

                          </center>
            </div>
            </div>

            <div class="col-3"> <!-- right sit related projects -->
            <div class="right_side_panel_related_projects">
            <ul>
              <li>
                Iterm1
              </li>
              <li>
                Item2
              </li>
            </ul>
        <!--    <ul class="media-list main-list">
			  <li class="media">
			    <a class="pull-left" href="#">
			      <img class="media-object" src="http://placehold.it/150x90" alt="...">
			    </a>
			    <div class="media-body">
			      <h6 class="media-heading"> asit amet</h6>
			      <p class="by-author">By Jhon Doe</p>
			    </div>
			  </li>
			  <li class="media">
			    <a class="pull-left" href="#">
			      <img class="media-object" src="http://placehold.it/150x90" alt="...">
			    </a>
			    <div class="media-body">
			      <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
			      <p class="by-author">By Jhon Doe</p>
			    </div>
			  </li>
			  <li class="media">
			    <a class="pull-left" href="#">
			      <img class="media-object" src="http://placehold.it/150x90" alt="...">
			    </a>
			    <div class="media-body">
			      <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
			      <p class="by-author">By Jhon Doe</p>
			    </div>
			  </li>
			</ul> -->
		
            </div>
            </div>
        
            </div>
            </div> <!-- row Ends -->
           <?php }}
       
?>
            <div class="row">
              <div class="col footer">

	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-youtube"></i></a>
					</p>
					<p><small>&copy; Made By Beds. All Rights Reserved. <br>Developed by: <a href="test_index.php">Abdul Basith</a> </small></p>
				</div>
			</div>
		</div>
	</footer>
	
              </div>
           
            </div><!--  End footer row --> 
        </div><!-- Main container Closing -->
    </body>
</html>