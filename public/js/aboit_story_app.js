var app = angular.module('StoryApp', []);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  });

app.controller('StoryController', function($scope, $http) {
    $scope.likeThisStory = function(id){

      if(window.user){
        var dataObj = {};

        $http.post(APP_URL+'/me/'+id+'/like', dataObj).
        then(function(response, status, headers, config) {
          $scope.data = response.data;
        },function(data, status, headers, config) {
          alert( "failure message: " + JSON.stringify({data: data}));
        });
      }
      else{
        alert("Please login!")
      }
    }

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