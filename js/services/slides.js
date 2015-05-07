Caroscriber.factory("slides",["$http", function($http){
    return $http.get("http://localhost:80/Producktiviti/Caroscriber/caroscriber.json")
       .success(function(data){
            return data;
        }).error(function(err){
          return err;
        });
  }]);