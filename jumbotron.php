<html lang="en">
<?php include('./include/header.php'); ?>

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
 width: 300px;
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

.col-md-4 {
 margin-bottom: 75px;
}
.row h1 {
 font-size: 2.5em;
 font-weight: 800;
 color: #000;
 margin-bottom: 0;
 padding: 0;
 text-transform: uppercase;
}

.row h2 {
 color: #000;
 font-size: 1.2em;
 font-weight: normal;
 padding: 0.75em 1.1em;
 line-height: 1.4em;
 max-width: 66%;
 margin: 0 auto 60px
}

.row h3 {
 text-transform: uppercase;
 font-weight: 800;
 font-size: 12pt;
}

.media-object {
 width: 100px;
}

.culture {
 margin-right: 0;
 margin-left: 0;
 background-color: #eee;
}

.relax-block h1 {
 text-align: left;
 padding: 50px;
 color: #fff;
}
.latest-project .media-object {
 width: 50px;
}

.relax-block .media,
.relax-block p {
 text-align: left;
 padding-left: 50px;
 color: #fff;
}

.relax-block .btn {
 text-transform: uppercase;
 margin-left: 50px;
 margin-top: 40px;
 padding: 15px 30px;
}

.greenText {
 color: green;
}

.relax-block .media-object {
 width: 35px;
}

.settings {
 background: url(http://habrastorage.org/files/dc7/a2b/279/dc7a2b2793154a5e90d53cf4df64a497.png) 100% 100% no-repeat;
 background-size: cover;
 height: 600px;
 margin-left: 35%;
}
.relax-block .col-md-4 {
 background-color: #ddd;
 min-height: 600px; 
 max-height: 600px; 
}
.relax-block .col-md-8 {
 margin-right: 0;
 min-height: 600px; 
 max-height: 600px; 
 background: url(http://habrastorage.org/files/f2e/2e4/066/f2e2e4066a13457a9083422da5d35e59.jpg) 100% 100% no-repeat;
 background-size: cover;
}

.details {
 font-size: 14pt;
 color: green;
 text-transform: uppercase;
}

.bubble-right {
 position: relative;
 width: 100%;
 height: 140px;
 padding: 0px;
 background: #eee;
 -webkit-border-radius: 0px;
 -moz-border-radius: 0px;
 border-radius: 0px;
}

.bubble-right:after {
 content: '';
 position: absolute;
 border-style: solid;
 border-width: 15px 15px 15px 0;
 border-color: transparent #eee;
 display: block;
 width: 0;
 z-index: 1;
 left: -15px;
 top: 38px;
}

.bubble-left {
 position: relative;
 width: 100%;
 height: 140px;
 padding: 0px;
 background: #eee;
 -webkit-border-radius: 0px;
 -moz-border-radius: 0px;
 border-radius: 0px;
}

.bubble-left:after {
 content: '';
 position: absolute;
 border-style: solid;
 border-width: 15px 0 15px 15px;
 border-color: transparent #eee;
 display: block;
 width: 0;
 z-index: 1;
 right: -15px;
 top: 38px;
}

.cite-text {
 padding: 25px;
 padding-bottom: 10px;
 vertical-align: middle;
 font-size: 16pt;
}

.cite-author {
 color: green;
 font-size: 14pt;
}

.col-md-10 {
 text-align: center; 
 padding-bottom: 75px;
}

.container-fluid  .row {
 margin-right: 0;
 margin-left: 0;
}

.container-fluid-colored {
 background-color: green;
 min-height: 220px;
 max-height: 220px;
 text-align: center;
}
.container-fluid-colored h1 {
 color: white;
 padding-top: 35px;
}
.container-fluid-colored .btn {
 border-radius: 3px;
 margin-top: 20px;
 border: solid 3px white;
 padding: 10px 50px;
 text-transform: uppercase;
 font-weight: bold;
}

.partnership {
 padding: 65px;
}

.prefooter {
 background-color: #111;
 padding-left: 120px;
 padding-right: 120px;
 min-height: 300px;
 max-height: 300px;
}
.prefooter h3 {
 padding-top: 40px;
}

.prefooter h3,
.prefooter p {
 color: white;
 text-align: left;
}

.prefooter .img-responsive {
 width: 20px;
 display: inline;
 margin-right: 10px;
}

footer {
 background: #fff;
 color: #000;
 padding: 1.2em 0 0.6em;
}

footer p {
 padding-top: 17px;
}
footer li {
 display: inline;
} 
footer img {
 width: 45px;
}

footer .col-md-4 {
 margin-bottom: 0;
}
@media screen and (max-width: 1200px) {
 .jumbotron {
   height: 350px;
 }
}
@media screen and (max-width: 768px) {
 .jumbotron {
   height: 300px;
   padding-top: 1em;
 }
 .feature-photo {
   margin: 0.1em 0;
 }
 .jumbotron h2 {
   max-width: 100%;
 }
 .navbar ul.nav li {
   text-align: center;
 }
 .navbar ul.nav li button {
   margin: 1em 0;
 }
 .media-benefit {
   margin-bottom: 2em;
 }
}
@media screen and (max-width: 480px) {
 body {
   font-size: 12px;
 }
 .jumbotron {
   font-size: 12px;
   height: 150px;
   padding-top: 0.1em;
 }
 footer .pull-right {
   display: none;
 }
}
    </style>
      <body>
<nav class="navbar navbar-default" role="navigation">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand nav-link" href="#top"><img src="http://habrastorage.org/files/dd7/b9e/3e6/dd7b9e3e6c2445ee9afb07990b0401ac.jpg" class="logo"></a>
       </div> <!-- /.navbar-header -->

       <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="#">Home</a></li>
           <li><a href="#">About</a></li>
           <li><a href="#">Blog</a></li>
           <li><a href="#">Portfolio</a></li>
           <li><a href="#">Contact</a></li>
         </ul>
       </div> <!-- /.navbar-collapse -->
     </div> <!-- /.container -->
   </nav> <!-- /.navbar -->

   <div class="jumbotron">
     <div class="container">
       <h1 class="text-center">Creative digital <br>solutions</h1>
       <h2 class="text-center">Proin iaculis purus consequat sem cure.</h2>
       <a href="#" class="btn btn-success btn-large">View Portfolio</a>
     </div> <!-- /.container -->
   </div> <!-- /.jumbotron -->

   <div class="spacer"></div>

   <div class="container">

     <div class="spacer"></div>

     <div class="row">
       <h1 class="text-center">Professional services</h1>
       <h2 class="text-center">Proin iaculis purus consequat sem cure.</h2>
       <div class="col-md-4 col-sm-4">
         <img src="http://habrastorage.org/files/149/b8d/ccd/149b8dccd2bb4ab8bdb3474beafa2911.png" class="feature-photo">
         <h3>Beautiful designs</h3>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. 
         </p>
       </div>
       <div class="col-md-4 col-sm-4">
         <img src="http://habrastorage.org/files/add/63a/f0a/add63af0a9e04677877f38a1d8941955.png" class="feature-photo">
         <h3>Responsive web</h3>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
       </div>
       <div class="col-md-4 col-sm-4">
         <img src="http://habrastorage.org/files/07a/5f5/ad1/07a5f5ad10c946ebba7e197133a73833.png" class="feature-photo">
         <h3>Marketing tools</h3>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
       </div>
     </div> <!-- /.row -->
   </div> <!-- /.container -->

   <div class="container-fluid relax-block">
     <div class="row">
       <div class="col-md-4">
         <a href="#">
           <img src="http://habrastorage.org/files/dc7/a2b/279/dc7a2b2793154a5e90d53cf4df64a497.png" class="settings">
         </a>
       </div>
       <div class="col-md-8">
         <h1 class="text-center">Just relax <span class="greenText">&</span> <br>Let us do the heavy lifting</h1>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. <br>Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
         <div class="media">
           <a class="pull-left" href="#">
             <img class="media-object" src="http://habrastorage.org/files/1a5/312/1af/1a53121afa79450e871441bfd17965dd.gif" alt="ok">
           </a>
           <div class="media-body">
             <h4 class="media-heading">Initial Setip & Castomizations</h4>
           </div>
         </div>
         <div class="media">
           <a class="pull-left" href="#">
             <img class="media-object" src="http://habrastorage.org/files/1a5/312/1af/1a53121afa79450e871441bfd17965dd.gif" alt="ok">
           </a>
           <div class="media-body">
             <h4 class="media-heading">Regular Updates</h4>
           </div>
         </div>
         <div class="media">
           <a class="pull-left" href="#">
             <img class="media-object" src="http://habrastorage.org/files/1a5/312/1af/1a53121afa79450e871441bfd17965dd.gif" alt="ok">
           </a>
           <div class="media-body">
             <h4 class="media-heading">Round The Clock Support</h4>
           </div>
         </div>
         <a href="#" class="btn btn-success btn-large">View Portfolio</a>
       </div>
     </div>
   </div>

   <div class="container latest-project">
     <div class="row">
       <h1 class="text-center">Latest project</h1>
       <h2 class="text-center">Proin iaculis purus consequat sem cure.</h2>
       <div class="col-md-6 col-sm-6">
         <h3>Developing a framework</h3>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
         <div class="media">
           <a class="pull-left" href="#">
             <img class="media-object" src="http://habrastorage.org/files/c1c/ace/894/c1cace894f614231a826910757246711.png" alt="cart">
           </a>
           <div class="media-body">
             <h4 class="media-heading"><b>E-Commerce Ready</b></h4>
             <p>
               Proin iaculis purus consequat sem cure digni ssim. 
             </p>
           </div>
         </div>
         <div class="media">
           <a class="pull-left" href="#">
             <img class="media-object" src="http://habrastorage.org/files/a73/a58/9f3/a73a589f3e684b2c97f3e88d67158fed.png" alt="laptop">
           </a>
           <div class="media-body">
             <h4 class="media-heading"><b>Powerful SEO Features</b></h4>
             <p>
               Proin iaculis purus consequat sem cure.
             </p>
           </div>
         </div>
         <div class="media">
           <a class="pull-left" href="#">
             <img class="media-object" src="http://habrastorage.org/files/839/a1e/3c6/839a1e3c6c364edab8910dfd419cf5db.png" alt="lock">
           </a>
           <div class="media-body">
             <h4 class="media-heading"><b>Secure Encryption</b></h4>
             <p>
               Proin iaculis purus consequat sem cure iaculis purus.
             </p>
           </div>
         </div>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
         <a href="/details" class='details'>View details-></a>
       </div>
       <div class="col-md-6 col-sm-6">
         <img src="http://habrastorage.org/files/2bc/a77/470/2bca7747050f4d5bb8d12923fdbd9ed6.jpg" class="img-responsive">
       </div>
     </div> <!-- /.row -->
   </div>

   <div class="container-fliud">
     <div class="row culture">
       <h1 class="text-center">Culture & values</h1>
       <h2 class="text-center">Proin iaculis purus consequat sem cure.</h2>
       <div class="col-md-4 col-sm-4">
         <img src="http://habrastorage.org/files/305/955/71c/30595571c0b447528662e4cc19e71261.png" class="feature-photo">
         <h3>Work-life balance</h3>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
       </div>
       <div class="col-md-4 col-sm-4">
         <img src="http://habrastorage.org/files/6d0/1f9/7f4/6d01f97f43b64196aec9e72292048139.png" class="feature-photo">
         <h3>Quality over quantity</h3>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
       </div>
       <div class="col-md-4 col-sm-4">
         <img src="http://habrastorage.org/files/fd1/eb0/685/fd1eb0685bbe4d55b35407e92703ca1a.png" class="feature-photo">
         <h3>Deliver excellence</h3>
         <p>
           Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.
         </p>
       </div>
     </div> <!-- /.row -->
   </div>

   <div class="container">
     <div class="row">
       <h1 class="text-center">Our awesome clients</h1>
       <h2 class="text-center">Proin iaculis purus consequat sem cure.</h2>
       <div class="row">
         <div class="col-md-2 col-sm-2">
           <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" width="140" height="140" border="0" class="img-circle">
         </div>
         <div class="col-md-10 col-sm-10">
           <div class="bubble-right">
             <p class="cite-text">"Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt."</p>
             <a href="#" class="cite-author">-Jamie Richardson, Founder of Cocoa Media</a>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-10 col-sm-10">
           <div class="bubble-left">
             <p class="cite-text">"Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt."</p>
             <a href="#" class="cite-author">-Kim Thompson, Founder of Rainel</a>
           </div>
         </div>
         <div class="col-md-2 col-sm-2">
           <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" width="140" height="140" border="0" class="img-circle">
         </div>
       </div>
     </div> <!-- /.row -->

   </div> <!-- /.container -->

   <div class="container-fluid container-fluid-colored">
     <div class="row">
       <h1 class="text-center">Ready to talk about your next project?</h1>
       <a href="#" class="btn btn-success btn-large">Contact us</a>
     </div>
   </div>

    <div class="container-fluid partnership">
     <div class="row">
       <div class="col-md-2 col-md-offset-2">
         <img src="http://habrastorage.org/files/23a/60c/c91/23a60cc915064eb899ae16ffd3822edf.png" class="img-responsive">
       </div>
       <div class="col-md-2">
         <img src="http://habrastorage.org/files/e52/e6c/ece/e52e6cece25247a9925615d0e20897bd.png" class="img-responsive">
       </div>
       <div class="col-md-2">
         <img src="http://habrastorage.org/files/3c5/5c9/139/3c55c9139faf4b8b9df2eb01d098dcaf.png" class="img-responsive">
       </div>
       <div class="col-md-2">
         <img src="http://habrastorage.org/files/735/68e/808/73568e8086014a89ac66d507bea33b46.png" class="img-responsive">
       </div>
     </div>
   </div>
   
   <div class="container-fluid prefooter">
     <div class="row">
       <div class="col-md-4">
         <h3>Contact us</h3>
         <p><img class="img-responsive" src="http://habrastorage.org/files/9fd/832/ffa/9fd832ffa63b45c6b9ea11793a69c445.png">55 Main St.,<br>Toronto, ON<br>MIH 3A5</p>
         <p><img class="img-responsive" src="http://habrastorage.org/files/f2a/5f1/650/f2a5f16506944e1ebb0460ad839934c5.png">(416)555-5252</p>
         <p><img class="img-responsive" src="http://habrastorage.org/files/e3e/88e/f8d/e3e88ef8d3a640488b594f118e68bcab.png">hello@treehouse.com</p>
       </div>
       <div class="col-md-4">
         <h3>Latest posts</h3>
         <p><img class="img-responsive" src="http://habrastorage.org/files/add/a1e/331/adda1e331e90472886ce5d82a6457369.png">Made With Love in Toronto</p>
         <p><img class="img-responsive" src="http://habrastorage.org/files/add/a1e/331/adda1e331e90472886ce5d82a6457369.png">Startup News & Emerging Tech</p>
         <p><img class="img-responsive" src="http://habrastorage.org/files/add/a1e/331/adda1e331e90472886ce5d82a6457369.png">Bicoin Will Soon Rule The World</p>
         <p><img class="img-responsive" src="http://habrastorage.org/files/add/a1e/331/adda1e331e90472886ce5d82a6457369.png">Wearable Technology On The Rise</p>
         <p><img class="img-responsive" src="http://habrastorage.org/files/2e1/3ce/757/2e13ce757a9f43a3ae1bb736c089ec46.png">Learn Web Design In 30 Daus!</p>
       </div>
       <div class="col-md-4">
         <h3>latest tweets</h3>
         <p><img class="img-responsive" src="http://habrastorage.org/files/505/1d7/98c/5051d798c60b4377ae3baa7d2ff52761.png">Conficius: Life is really simple,<br>but we insist on making it<br>complicated<br>#famousquotes<span class="twitter-time">8 mins ago</span></p>
         <p><img class="img-responsive" src="http://habrastorage.org/files/505/1d7/98c/5051d798c60b4377ae3baa7d2ff52761.png">Grab the Treehouse web<br>template at FreebiesXpress!<br>#freebies #templates<span class="twitter-time">2 days ago</span></p>
       </div>
     </div>
   </div>


   <footer>
     <div class="container clearfix">
       <div class="row">
         <div class="col-md-4">
           <p class="pull-left">
             © Copyright 2014 FreebiesXpress.com
           </p>
         </div>

         <div class="col-md-4">
           <div class="text-center">
             <ul>
               <li>
                 <a href="#">
                   <img src="http://habrastorage.org/files/4aa/ade/690/4aaade6908b04770b2ee0bae48c78e2b.png">
                 </a>
               </li>
               <li>
                 <a href="#">
                   <img src="http://habrastorage.org/files/90e/5ff/fcf/90e5fffcff25466ba012e8116a4b71ca.png">
                 </a>
               </li>
               <li>
                 <a href="#">
                   <img src="http://habrastorage.org/files/7bc/694/c8f/7bc694c8f2e44a74aff784e5366500f9.png">
                 </a>
               </li>
               <li>
                 <a href="#">
                   <img src="http://habrastorage.org/files/6e6/2c3/163/6e62c31635914f19bd79f492ac61d086.png">
                 </a>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div> <!-- /.container -->
   </footer>
  
  </body>
</html>