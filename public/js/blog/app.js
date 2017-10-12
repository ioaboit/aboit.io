var app = angular.module('blogApp', []);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  });

app.controller('blogController', function($scope, $http) {

    // $http.get("/api/get/blogs")
    $http.get("api/get/posts")
    .then(function(response) {
        $scope.blogs = response.data;
        console.log($scope.blogs);
    }, function myError(response) {
        alert('error');
    });

});

// app.filter("trust", ['$sce', function($sce) {
//   return function(htmlCode){
//     return $sce.trustAsHtml(htmlCode);
//   }
// }]);

app.filter("trust", ['$sce','$filter', function($sce, $filter) {
  return function(htmlCode){
    htmlCode= $filter('limitTo')(htmlCode, 200, 0);
    htmlCode = htmlCode ? String(htmlCode).replace(/<[^>]+>/gm, '') : ''
    return $sce.trustAsHtml(htmlCode);
  }
}]);

app.filter("htmlToPlaintext", function() {
  return function(text) {
      return  text ? String(text).replace(/<[^>]+>/gm, '') : '';
    }
});