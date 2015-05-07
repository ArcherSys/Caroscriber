Caroscriber.controller("HomeController",["$scope","slides",function($scope){
   slides.success(function(data){
       $scope.slides = data;
});
}]);