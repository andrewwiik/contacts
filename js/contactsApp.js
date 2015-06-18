"use strict";

var contactsApp = angular.module('contactsApp', []);
    contactsApp.controller('contactController', [ "$scope", "$http", function ($scope, $http){
      $http({method: 'GET', url: 'contacts.php'}).success(function(data){
        $scope.contact = data;
      });
    $scope.sortField = 'contact';
    $scope.reverse = true;
}]);