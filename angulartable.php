<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <style>
table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}

table tr:nth-child(odd) {
  background-color: #f1f1f1;
}

table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
    </head>
    <body>
        <div ng-app="myApp" ng-controller="personCtrl">

<table>
  <tr ng-repeat="x in names">
    <td>{{ x.id }}</td>
    <td>{{ x.name }}</td>
    <td>{{ x.address }}</td>
    <td>{{ x.phone }}</td>
  </tr>
</table>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('personCtrl', function($scope, $http) {
  $http.get("populate.php")
  .then(function (response) {$scope.names = response.data.records;}
  );
});
</script>
        <?php
        // put your code here
        ?>
    </body>
</html>

