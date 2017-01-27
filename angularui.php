<!DOCTYPE html>
<html ng-app="ngMaterial">
<head>
   
<style>
   .menuBardemoBasicUsage .page-container {
  padding: 32px; }

.menuBardemoBasicUsage .page {
  margin: 0 auto;
  padding: 24px;
  max-width: 680px;
  box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.25); }

.menuBardemoBasicUsage .page h1 {
  text-align: center;
  font-size: 1.8rem;
  margin-top: 0;
  font-weight: normal; }

.menuBardemoBasicUsage .page p {
  line-height: 1.6rem; }

    </style>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Angular Material style sheet -->
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link href="MetroUi/build/css/metro.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <script>
angular
  .module('menuBarDemoBasic', ['ngMaterial'])
  .config(function($mdIconProvider) {
    $mdIconProvider
      .defaultIconSet('img/icons/sets/core-icons.svg', 24);
  })
  .filter('keyboardShortcut', function($window) {
    return function(str) {
      if (!str) return;
      var keys = str.split('-');
      var isOSX = /Mac OS X/.test($window.navigator.userAgent);

      var seperator = (!isOSX || keys.length > 2) ? '+' : '';

      var abbreviations = {
        M: isOSX ? '⌘' : 'Ctrl',
        A: isOSX ? 'Option' : 'Alt',
        S: 'Shift'
      };

      return keys.map(function(key, index) {
        var last = index == keys.length - 1;
        return last ? key : abbreviations[key];
      }).join(seperator);
    };
  })
  .controller('DemoBasicCtrl', function DemoCtrl($mdDialog) {
    this.settings = {
      printLayout: true,
      showRuler: true,
      showSpellingSuggestions: true,
      presentationMode: 'edit'
    };

    this.sampleAction = function(name, ev) {
      $mdDialog.show($mdDialog.alert()
        .title(name)
        .textContent('You triggered the "' + name + '" action')
        .ok('Great')
        .targetEvent(ev)
      );
    };
  });

    </script>
   
</head>

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
    <body>
        <div ng-controller="DemoBasicCtrl as ctrl" ng-cloak>
  <md-toolbar class="md-menu-toolbar">
    <div layout="row">
      <md-toolbar-filler layout layout-align="center center">
        <md-icon md-svg-icon="call:chat"></md-icon>
      </md-toolbar-filler>

      <div>
        <h2 class="md-toolbar-tools">Untitled document</h2>
        <md-menu-bar>
          <md-menu>
            <button ng-click="$mdOpenMenu()">
              File
            </button>
            <md-menu-content>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('share', $event)">
                  Share...
                </md-button>
              </md-menu-item>
              <md-menu-divider></md-menu-divider>
              <md-menu-item>
                <md-menu>
                  <md-button ng-click="$mdOpenMenu()">New</md-button>
                  <md-menu-content>
                    <md-menu-item><md-button ng-click="ctrl.sampleAction('New Document', $event)">Document</md-button></md-menu-item>
                    <md-menu-item><md-button ng-click="ctrl.sampleAction('New Spreadsheet', $event)">Spreadsheet</md-button></md-menu-item>
                    <md-menu-item><md-button ng-click="ctrl.sampleAction('New Presentation', $event)">Presentation</md-button></md-menu-item>
                    <md-menu-item><md-button ng-click="ctrl.sampleAction('New Form', $event)">Form</md-button></md-menu-item>
                    <md-menu-item><md-button ng-click="ctrl.sampleAction('New Drawing', $event)">Drawing</md-button></md-menu-item>
                  </md-menu-content>
                </md-menu>
              </md-menu-item>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('Open', $event)">
                  Open...
                  <span class="md-alt-text"> {{ 'M-O' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item>
                <md-button disabled="disabled" ng-click="ctrl.sampleAction('Rename', $event)">
                  Rename
                </md-button>
              </md-menu-item>
              <md-menu-divider></md-menu-divider>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('Print', $event)">
                  Print
                  <span class="md-alt-text">{{ 'M-P' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
            </md-menu-content>
          </md-menu>
          <md-menu>
            <button ng-click="$mdOpenMenu()">
              Edit
            </button>
            <md-menu-content>
              <md-menu-item class="md-indent">
                <md-icon md-svg-icon="undo"></md-icon>
                <md-button ng-click="ctrl.sampleAction('undo', $event)">
                  Undo
                  <span class="md-alt-text">{{ 'M-Z' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item class="md-indent">
                <md-icon md-svg-icon="redo"></md-icon>
                <md-button ng-click="ctrl.sampleAction('redo', $event)">
                  Redo
                  <span class="md-alt-text">{{ 'M-Y' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-divider></md-menu-divider>
              <md-menu-item class="md-indent">
                <md-icon md-svg-icon="content-cut"></md-icon>
                <md-button ng-click="ctrl.sampleAction('cut', $event)">
                  Cut
                  <span class="md-alt-text">{{ 'M-X' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item class="md-indent">
                <md-icon md-svg-icon="content-copy"></md-icon>
                <md-button ng-click="ctrl.sampleAction('copy', $event)">
                  Copy
                  <span class="md-alt-text">{{ 'M-C' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item class="md-indent">
                <md-icon md-svg-icon="content-paste"></md-icon>
                <md-button ng-click="ctrl.sampleAction('paste', $event)">
                  Paste
                  <span class="md-alt-text">{{ 'M-P' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-divider></md-menu-divider>
              <md-menu-item class="md-indent">
                <md-button ng-click="ctrl.sampleAction('Find and replace', $event)">
                  Find and replace...
                  <span class="md-alt-text">{{ 'M-S-H' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
            </md-menu-content>
          </md-menu>
          <md-menu>
            <button ng-click="$mdOpenMenu()">
              View
            </button>
            <md-menu-content>
              <md-menu-item type="checkbox" ng-model="ctrl.settings.printLayout">Print layout</md-menu-item>
              <md-menu-item class="md-indent">
                <md-menu>
                  <md-button ng-click="$mdOpenMenu()">Mode</md-button>
                  <md-menu-content width="3">
                    <md-menu-item type="radio" ng-model="ctrl.settings.presentationMode" value="'presentation'">Presentation</md-menu-item>
                    <md-menu-item type="radio" ng-model="ctrl.settings.presentationMode" value="'edit'">Edit</md-menu-item>
                    <md-menu-item type="radio" ng-model="ctrl.settings.presentationMode" value="'modifiable'">Modifiable</md-menu-item>
                  </md-menu-content>
                </md-menu>
              </md-menu-item>
              <md-menu-divider></md-menu-divider>
              <md-menu-item type="checkbox" ng-model="ctrl.settings.showRuler">Show ruler</md-menu-item>
              <md-menu-item type="checkbox" ng-model="ctrl.settings.showEquationToolbar">Show equation toolbar</md-menu-item>
              <md-menu-item type="checkbox" ng-model="ctrl.settings.showSpellingSuggestions">Show spelling suggestions</md-menu-item>
              <md-menu-divider></md-menu-divider>
              <md-menu-item type="checkbox" ng-model="ctrl.settings.compactControls">Compact controls</md-menu-item>
              <md-menu-item type="checkbox" ng-model="ctrl.settings.fullScreen">Full screen</md-menu-item>
            </md-menu-content>
          </md-menu>
          <md-menu>
            <button ng-click="$mdOpenMenu()">
              Format
            </button>
            <md-menu-content>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('bold', $event)">
                  Bold
                  <span class="md-alt-text"> {{ 'M-B' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('italic', $event)">
                  Italic
                  <span class="md-alt-text">{{ 'M-I' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('underline', $event)">
                  Underline
                  <span class="md-alt-text">{{ 'M-U' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('strikethrough', $event)">
                  Strikethrough
                  <span class="md-alt-text">{{ 'A-S-5' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('superscript', $event)">
                  Superscript
                  <span class="md-alt-text">{{ 'M-.' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-item>
                <md-button ng-click="ctrl.sampleAction('subscript', $event)">
                  Subscript
                  <span class="md-alt-text">{{ 'M-,' | keyboardShortcut }}</span>
                </md-button>
              </md-menu-item>
              <md-menu-divider></md-menu-divider>
              <md-menu-item><md-button ng-click="ctrl.toggleSetting('clearFormatting')">Clear Formatting</md-button></md-menu-item>
            </md-menu-content>
          </md-menu>
        </md-menu-bar>
      </div>
    </div>
  </md-toolbar>

  <md-content class="page-container">
    <md-card class="page">
      <h1>Untitled document</h1>
      <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
      <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
      <p>Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
    </md-card>
  </md-content>
</div>

</body>
</html>