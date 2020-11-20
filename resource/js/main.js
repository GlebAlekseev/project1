
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

/*Физика*/
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
newList();
function newList() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumb.php"
  }).then(function mySuccess(response) {
    $scope.myNumb = response.data;
  }, function myError(response) {

  });

}
/*Программирование*/


  $http({
    method : "GET",
      url : "/resource/handler/getinfoprog.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeprog = response.data;
  }, function myError(response) {

  });



function refreshprog() {

  $http({
    method : "GET",
      url : "/resource/handler/getinfoprog.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeprog = response.data;
  }, function myError(response) {

  });}




$scope.deletedataprog=function(id){


		  $http({
		  	
		    method : "POST",
		      url : "/resource/handler/deleteTerminprog.php",
		      data: {'id':id}
		  }).then(function mySuccess(response) {
refreshprog();

		  }, function myError(response) {

		  });	
		  	$scope.msg = id;
	}
newListprog();
function newListprog() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumbprog.php"
  }).then(function mySuccess(response) {
    $scope.myNumbprog = response.data;
  }, function myError(response) {

  });

}






/*Информатика */



  $http({
    method : "GET",
      url : "/resource/handler/getinfoinf.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeinf = response.data;
  }, function myError(response) {

  });



function refreshinf() {

  $http({
    method : "GET",
      url : "/resource/handler/getinfoinf.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeinf = response.data;
  }, function myError(response) {

  });}




$scope.deletedatainf=function(id){


		  $http({
		  	
		    method : "POST",
		      url : "/resource/handler/deleteTermininf.php",
		      data: {'id':id}
		  }).then(function mySuccess(response) {
refreshinf();

		  }, function myError(response) {

		  });	
		  	$scope.msg = id;
	}
newListinf();
function newListinf() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumbinf.php"
  }).then(function mySuccess(response) {
    $scope.myNumbinf = response.data;
  }, function myError(response) {

  });

}




/*Англ яз*/


  $http({
    method : "GET",
      url : "/resource/handler/getinfoeng.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeeng = response.data;
  }, function myError(response) {

  });



function refresheng() {

  $http({
    method : "GET",
      url : "/resource/handler/getinfoeng.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeeng = response.data;
  }, function myError(response) {

  });}




$scope.deletedataeng=function(id){


		  $http({
		  	
		    method : "POST",
		      url : "/resource/handler/deleteTermineng.php",
		      data: {'id':id}
		  }).then(function mySuccess(response) {
refresheng();

		  }, function myError(response) {

		  });	
		  	$scope.msg = id;
	}
newListeng();
function newListeng() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumbeng.php"
  }).then(function mySuccess(response) {
    $scope.myNumbeng = response.data;
  }, function myError(response) {

  });

}

/*fin*/














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


$scope.starttestprog = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1 = 'none';
	$scope.dispnone2 = 'flex';

	newListprog();

	$scope.statbrad = '';
	$scope.more = 0;
	$scope.colortest = '';
	$scope.statusclick = '';
}


$scope.starttestinf = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1 = 'none';
	$scope.dispnone2 = 'flex';

	newListinf();

	$scope.statbrad = '';
	$scope.more = 0;
	$scope.colortest = '';
	$scope.statusclick = '';
}


$scope.starttesteng = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1 = 'none';
	$scope.dispnone2 = 'flex';

	newListeng();

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

$scope.startfizika = function(argument) {
	// body...
	$scope.fizikablock = 'block';
	$scope.progblock = 'none';
	$scope.informblock = 'none';
	$scope.engblock = 'none';
	$scope.down1 = 'white';
	$scope.down2 = '';
	$scope.down3 = '';
	$scope.down4 = '';
}

$scope.startprogramming = function(argument) {
	// body...
	$scope.fizikablock = 'none';
	$scope.progblock = 'block';
	$scope.informblock = 'none';
	$scope.engblock = 'none';
	$scope.down1 = 'black';
	$scope.down2 = 'white';
	$scope.down3 = '';
	$scope.down4 = '';
}

$scope.startinform = function(argument) {
	// body...
	$scope.fizikablock = 'none';
	$scope.progblock = 'none';
	$scope.informblock = 'block';
	$scope.engblock = 'none';
	$scope.down1 = 'black';
	$scope.down2 = '';
	$scope.down3 = 'white';
	$scope.down4 = '';
}

$scope.startenglish = function(argument) {
	// body...
	$scope.fizikablock = 'none';
	$scope.progblock = 'none';
	$scope.informblock = 'none';
	$scope.engblock = 'block';
	$scope.down1 = 'black';
	$scope.down2 = '';
	$scope.down3 = '';
	$scope.down4 = 'white';
}




$scope.fizad = function(argument) {
	$scope.fizdisp = 'block';
	$scope.progdisp = 'none';
	$scope.infdisp = 'none';
	$scope.engdisp = 'none';
}

$scope.progad = function(argument) {
	$scope.fizdisp = 'none';
	$scope.progdisp = 'block';
	$scope.infdisp = 'none';
	$scope.engdisp = 'none';
}

$scope.infad = function(argument) {
		$scope.fizdisp = 'none';
	$scope.progdisp = 'none';
	$scope.infdisp = 'block';
	$scope.engdisp = 'none';
}

$scope.engad = function(argument) {
	$scope.fizdisp = 'none';
	$scope.progdisp = 'none';
	$scope.infdisp = 'none';
	$scope.engdisp = 'block';
}




$scope.clicktest = function(arg,on) {
	if ($scope.more == 0) {
	$scope.titleid = arg;
	$scope.statbrad = '4px solid Gold';
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