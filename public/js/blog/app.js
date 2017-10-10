var app = angular.module('blogApp', []);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  });

app.controller('blogController', function($scope, $http) {
    $http.get("/api/get/blogs")
    .then(function(response) {
        $scope.blogs = response.data;
        console.log($scope.blogs);
    }, function myError(response) {
        alert('error');
    });
});