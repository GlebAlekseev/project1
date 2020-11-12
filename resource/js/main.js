
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {


  $http({
    method : "GET",
      url : "/resource/handler/getinfo.php"
  }).then(function mySuccess(response) {
    $scope.myWelcome = response.data;
  }, function myError(response) {

  });



function refresh() {

  $http({
    method : "GET",
      url : "/resource/handler/getinfo.php"
  }).then(function mySuccess(response) {
    $scope.myWelcome = response.data;
  }, function myError(response) {

  });}




$scope.deletedata=function(id){


		  $http({
		  	
		    method : "POST",
		      url : "/resource/handler/deleteTermin.php",
		      data: {'id':id}
		  }).then(function mySuccess(response) {
refresh();

		  }, function myError(response) {

		  });	
		  	$scope.msg = id;
	}

function newList() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumb.php"
  }).then(function mySuccess(response) {
    $scope.myNumb = response.data;
  }, function myError(response) {

  });

}


$scope.starttest = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1 = 'none';
	$scope.dispnone2 = 'flex';

	newList();

	$scope.statbrad = '';
	$scope.more = 0;
	$scope.colortest = '';
	$scope.statusclick = '';
}


//
$scope.fintest = function(argument) {
	// body...
	$scope.dispnone1 = 'flex';
	$scope.dispnone2 = 'none';
}



$scope.clicktest = function(arg,on) {
	if ($scope.more == 0) {
	$scope.titleid = arg;
	$scope.statbrad = '4px solid black';
	$scope.more = 1;
		if (on == 'on'){
		$scope.colortest = 'green';
}else{
		$scope.colortest = 'red';
		$scope.statusclick = 'on';

}
}


}



});