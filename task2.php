<!DOCTYPE html>
<html ng-app="myApp">
<head>
 <title>Hide & Show Images with AngularJS</title>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <style>
 .hidden {
 display: none;
 }
 </style>
</head>
<body ng-controller="myCtrl">
 <h1>Hide & Show Images with AngularJS</h1>
 
 <button ng-click="showImage = !showImage">Toggle Image</button>
 
 <img ng-src="{{imageUrl}}" ng-class="{ 'hidden': !showImage }">
 
 <script>
 var app = angular.module('myApp', []);
 app.controller('myCtrl', function($scope) 
 {
 $scope.showImage = false;
 $scope.imageUrl = 'https://f4n3x6c5.stackpathcdn.com/article/create-github-repository-and-add-newexisting-project-using-githubdesktop/Images/github.png';
 });
 </script>
</body>
</html>