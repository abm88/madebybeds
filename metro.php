<!DOCTYPE html>
<html>
<head>
   
<style>
   .carddemoBasicUsage md-card {
  min-height: 250px; }

md-card>:not(md-card-content) img, md-card>img {
  box-sizing : border-box;
}

    </style>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Angular Material style sheet -->
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link href="MetroUi/build/css/metro.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="MetroUi/build/js/metro.js"></script>
      <script>
   angular
  .module('MyApp', ['ngMaterial'])
  .controller('AppCtrl', function($scope) {
    $scope.imagePath = 'https://material.angularjs.org/latest/img/washedout.png';
  });

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body style="background-color:#cecece">
  <!--
    Your HTML content here
  -->  
  
  <!-- Angular Material requires Angular.js Libraries -->
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

  <!-- Angular Material Library -->
  <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
<div class="app-bar green">
    
    <a class="app-bar-element" href="...">MadeByBeds</a>
    <span class="app-bar-divider"></span>
    
        <div class="app-bar-element place-right">
        <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Enter</a>
        <div class="app-bar-drop-container bg-white fg-dark place-right"
                data-role="dropdown" data-no-close="true">
            <div class="padding20">
                <form>
                    <h4 class="text-light">Login to service...</h4>
                    <div class="input-control text">
                        <span class="mif-user prepend-icon"></span>
                        <input type="text">
                    </div>
                    <div class="input-control text">
                        <span class="mif-lock prepend-icon"></span>
                        <input type="password">
                    </div>
                    <label class="input-control checkbox small-check">
                        <input type="checkbox">
                        <span class="check"></span>
                        <span class="caption">Remember me</span>
                    </label>
                    <div class="form-actions">
                        <button class="button">Login</button>
                        <button class="button link">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
            
    </div>
    <ul class="app-bar-menu">
        <li><a href="">Home</a></li>
        <li>
            <a href="" class="dropdown-toggle">Products</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="">Windows 10</a></li>
                <li><a href="">Spartan</a></li>
                <li><a href="">Outlook</a></li>
                <li><a href="">Office 2015</a></li>
                <li class="divider"></li>
                <li><a href="" class="dropdown-toggle">Other Products</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="">Internet Explorer 10</a></li>
                        <li><a href="">Skype</a></li>
                        <li><a href="">Surface</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="">Support</a></li>
        <li><a href="">Help</a></li>
        
    </ul>
    
</div>
<div data-role="dialog" id="dialog" data-background="info" data-width= "500" data-windows-style="false" data-height="auto" data-place="bottom-center" data-overlay-click-close="false">
    <h1>Project launch count down</h1>
    <div class="countdown" data-role="countdown" data-days="1" ></div>
     </div>
  <div ng-controller="AppCtrl" class="carddemoBasicUsage" ng-app="MyApp" ng-cloak>

    <md-content layout="column" layout-gt-xs="row" style="background-color:#cecece">

      <md-card flex flex-gt-md="30">
        <img ng-src="{{imagePath}}" class="md-card-image" alt="Washed Out">
        <md-card-content>
          <h2 class="md-title">Paracosm</h2>
          <p>
            The titles of Washed Out's breakthrough song and the first single from Paracosm share the two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
          </p>
        </md-card-content>
        <div class="md-actions" layout="row" layout-align="end center">
          <md-button>Action 1</md-button>
          <md-button>Action 2</md-button>
        </div>
      </md-card>
      <br>

      <md-card flex flex-gt-md="30">
        <img ng-src="{{imagePath}}" class="md-card-image" alt="Washed Out">
        <md-card-content>
          <h2 class="md-title">Paracosm</h2>
          <p>
            The titles of Washed Out's breakthrough song and the first single from Paracosm share the two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
          </p>
        </md-card-content>
      </md-card>
      <br>

      <md-card flex flex-gt-md="30">
        <img ng-src="{{imagePath}}" class="md-card-image" alt="Washed Out">
        <md-card-content>
          <h2 class="md-title">Paracosm</h2>
          <p>
            The titles of Washed Out's breakthrough song and the first single from Paracosm share the two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
          </p>
        </md-card-content>
      </md-card>
    </md-content>
  </div>


    <button class="button info" onclick="metroDialog.toggle('#dialog')">Open Countdown</button>

</body>
</html>