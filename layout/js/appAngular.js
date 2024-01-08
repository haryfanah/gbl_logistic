var app = angular.module('recherche_app', []);
app.controller('recherche_controller', function($scope , $http){
    $http.get("../../data.json").success(function(response){
        $scope.rechercheData = response.records;
    });   
});