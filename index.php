<!DOCTYPE html>
<html>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>

<div ng-app="myapp" ng-controller="person">
samyemad:<input type="text" ng-model="firstname"><br/>
<ul>
<li ng-repeat="x in names |  filter:firstname">
{{x.firstname+","+x.country}}
</li>
</ul>
</div>
<script>
var app=angular.module('myapp', [] );
app.controller('person',function($scope,$http){
	$http.get('http://www.w3schools.com/angular/customers_mysql.php').success(function (response){$scope.names=response.records})
	
});
</script>

</body>
</html>
