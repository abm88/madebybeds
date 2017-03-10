<html lang="en">
<?php include('./include/header.php'); ?>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
	       <script language="javascript">
         angular
            .module('firstApplication', ['ngMaterial'])
            .controller('cardController', cardController);

         function cardController ($scope) {            
         }  
    </script>
      <body ng-app="firstApplication">
<?php include('./include/navbar/navbar_main.php'); ?>
    <!-- Jambotron Mainbody -->
        <div class="jumbotron">
       <h1 class="text-center">Creative digital <br>Projects</h1>
       <h2 class="text-center">The bright work done by Beds students</h2>
       <a href="#" class="btn btn-success btn-large">View all projects</a>
     </div> <!-- /.jumbotron -->
 <div class="container main_wrapper">
        <!-- Body Contents Start-->
    
     <h3>Testing AngularJS</h3>
     <p>The perpose of the testing is to test footer</p>

    <div layout="row" layout-xs="column" layout="column">
        <div flex="30" class="blue box">
     <md-card>
         <img ng-src="classic_icon.jpg" class="md-card-image" alt="Learn HTML5">
         <md-card-header>
            <md-card-avatar>
               <img class="md-user-avatar" src="phone-icon.png">
            </md-card-avatar>
            <md-card-header-text>
               <span class="md-title">HTML5</span>
               <span class="md-subhead">Learn HTML5 @TutorialsPoint.com</span>
            </md-card-header-text>
         </md-card-header>
         <md-card-title>
            <md-card-title-text>
               <span class="md-headline">HTML5</span>
            </md-card-title-text>
         </md-card-title>
         <md-card-actions layout="row" layout-align="start center">
            <md-button>Download</md-button>
            <md-button>Start</md-button>
            <md-card-icon-actions>
               <md-button class="md-icon-button" aria-label="icon">
                  <md-icon class="material-icons">add</md-icon>
               </md-button>
            </md-card-icon-actions>
         </md-card-actions>
         <md-card-content>
            <p>HTML5 is the next major revision of the HTML standard superseding HTML 4.01, XHTML 1.0, testing for c9git </p>
         </md-card-content>
      </md-card>
          </div>
          </div>
     <br>
     <br>
     <br>
     <br>
        <!-- Body Contents End -->
     </div> <!-- /.container main wrapper testing perpose-->
       <?php include('./include/footer.php'); ?>
    
    <?php include('./include/foot.php'); ?>
  </body>
</html>