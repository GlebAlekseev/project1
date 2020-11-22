
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

function newList() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumb.php"
  }).then(function mySuccess(response) {
    $scope.myNumb = response.data;
  }, function myError(response) {

  });

}
newList();
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

function newListprog() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumbprog.php"
  }).then(function mySuccess(response) {
    $scope.myNumbprog = response.data;
  }, function myError(response) {

  });

}
newListprog();





/*Информатика */



  $http({
    method : "GET",
      url : "/resource/handler/getinfoinf.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeinf = response.data;
  }, function myError(response) {

  });


  $http({
    method : "GET",
      url : "/resource/handler/getinfoenglist.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeenglist = response.data;
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

function newListinf() {
	  $http({
    method : "GET",
      url : "/resource/handler/getnumbinf.php"
  }).then(function mySuccess(response) {
    $scope.myNumbinf = response.data;
  }, function myError(response) {

  });

}
newListinf();



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

  });

}




/*$scope.deletedataeng=function(id){


		  $http({
		  	
		    method : "POST",
		      url : "/resource/handler/deleteTermineng.php",
		      data: {'id':id}
		  }).then(function mySuccess(response) {
refresheng();

		  }, function myError(response) {

		  });	
		  	$scope.msg = id;
	}*/

function newListeng() {
/*	  $http({
    method : "GET",
      url : "/resource/handler/getnumbeng.php"
  }).then(function mySuccess(response) {
    $scope.myNumbeng = response.data;
  }, function myError(response) {

  });*/
  $http({
    method : "GET",
      url : "/resource/handler/getinfoeng.php"
  }).then(function mySuccess(response) {
    $scope.myWelcomeeng = response.data;
  }, function myError(response) {

  });
}
newListeng();
/*fin*/














$scope.starttest = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1fiz = 'none';
	$scope.dispnone2fiz = 'flex';

	newList();

	$scope.statbradf = '';
	$scope.moref = 0;
	$scope.colortestf = '';
	$scope.statusclickf = '';
}
$scope.fintest = function(argument) {
	// body...
	$scope.dispnone1fiz = 'flex';
	$scope.dispnone2fiz = 'none';
}




$scope.starttestprog = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1prog = 'none';
	$scope.dispnone2prog = 'flex';

	newListprog();

	$scope.statbradp = '';
	$scope.morep = 0;
	$scope.colortestp = '';
	$scope.statusclickp = '';
}

$scope.fintestprog = function(argument) {
	// body...
	$scope.dispnone1prog = 'flex';
	$scope.dispnone2prog = 'none';
}



$scope.starttestinf = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1inf = 'none';
	$scope.dispnone2inf = 'flex';

	newListinf();

	$scope.statbradi = '';
	$scope.morei = 0;
	$scope.colortesti = '';
	$scope.statusclicki = '';
}

$scope.fintestinf = function(argument) {
	// body...
	$scope.dispnone1inf = 'flex';
	$scope.dispnone2inf = 'none';
}



$scope.starttesteng = function(argument) {
	// body...{{dispnone1}}  

	$scope.dispnone1eng = 'none';
	$scope.dispnone2eng = 'flex';

	newListeng();

	$scope.statbrade1 = '';
	$scope.statbrade2 = '';
	$scope.statbrade3 = '';
	$scope.statbrade4 = '';
	$scope.moree = 0;
	$scope.colorteste1 = '';
	$scope.colorteste2 = '';
	$scope.colorteste3 = '';
	$scope.colorteste4 = '';
	$scope.statusclicke = '';
}

$scope.fintesteng = function(argument) {
	// body...
	$scope.dispnone1eng = 'flex';
	$scope.dispnone2eng = 'none';
}











$scope.startfizika = function(argument) {
	// body...
	$scope.fizikablock = 'block';
	$scope.progblock = 'none';
	$scope.informblock = 'none';
	$scope.engblock = 'none';
		// body...

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

$scope.numfw = 0;
$scope.numfl = 0;

$scope.numpw = 0;
$scope.numpl = 0;

$scope.numiw = 0;
$scope.numil = 0;

$scope.numew = 0;
$scope.numel = 0;


$scope.clicktestf = function(arg,on) {
	if ($scope.moref == 0) {
	$scope.titleidf = arg;
	$scope.statbradf = '4px solid Gold';
	$scope.moref = 1;
		if (on == 'on'){
		$scope.colortestf = 'green';
		$scope.numfw = $scope.numfw + 1;

}else{
		$scope.colortestf = 'red';
		$scope.statusclickf = 'on';
		$scope.numfl = $scope.numfl + 1;
}
}


}

$scope.clicktestp = function(arg,on) {
	if ($scope.morep == 0) {
	$scope.titleidp = arg;
	$scope.statbradp = '4px solid Gold';
	$scope.morep = 1;
		if (on == 'on'){
		$scope.colortestp = 'green';
		$scope.numpw = $scope.numpw+1;

}else{
		$scope.colortestp = 'red';
		$scope.statusclickp = 'on';
		$scope.numpl = $scope.numpl+1;
}
}


}

$scope.clicktesti = function(arg,on) {
	if ($scope.morei == 0) {
	$scope.titleidi = arg;
	$scope.statbradi = '4px solid Gold';
	$scope.morei = 1;
		if (on == 'on'){
		$scope.colortesti = 'green';
		$scope.numiw = $scope.numiw+1;

}else{
		$scope.colortesti = 'red';
		$scope.statusclicki = 'on';
		$scope.numil = $scope.numil+1;
}
}


}

$scope.clickteste = function(arg,on,num) {
	if ($scope.moree == 0) {
	$scope.titleide = arg;

	$scope.moree = 1;
		if (on == arg){
			if (num ==1) {
						$scope.colorteste1 = 'green';
						$scope.statbrade1 = '4px solid Gold';
			}
			if (num ==2) {
						$scope.colorteste2 = 'green';
						$scope.statbrade2 = '4px solid Gold';
			}
			if (num ==3) {
						$scope.colorteste3 = 'green';
						$scope.statbrade3 = '4px solid Gold';
			}
			if (num ==4) {
						$scope.colorteste4 = 'green';
						$scope.statbrade4 = '4px solid Gold';
			}

		$scope.numew = $scope.numew+1;

}else{



		if ($scope.myWelcomeeng.id1 == on) {$scope.colorteste1 = 'green';}
		if ($scope.myWelcomeeng.id2 == on) {$scope.colorteste2 = 'green';}
		if ($scope.myWelcomeeng.id3 == on) {$scope.colorteste3 = 'green';}
		if ($scope.myWelcomeeng.id4 == on) {$scope.colorteste4 = 'green';}





			if (num ==1) {
						$scope.colorteste1 = 'red';
						$scope.statbrade1 = '4px solid Gold';
			}
			if (num ==2) {
						$scope.colorteste2 = 'red';
						$scope.statbrade2 = '4px solid Gold';
			}
			if (num ==3) {
						$scope.colorteste3 = 'red';
						$scope.statbrade3 = '4px solid Gold';
			}
			if (num ==4) {
						$scope.colorteste4 = 'red';
						$scope.statbrade4 = '4px solid Gold';
			}

		$scope.statusclicke = 'on';
		$scope.numel = $scope.numel+1;
}





}


}



});