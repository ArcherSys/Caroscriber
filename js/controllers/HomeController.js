
Caroscriber.controller("HomeController",["$scope",function($scope){
  
   $("#usedoc").click(function(){

    $scope.caroscriber_document = "/PDFView/ViewerJS/" + $("input[name=document]").val();
     $("#doc").attr("src",$scope.caroscriber_document);
});


}]);
