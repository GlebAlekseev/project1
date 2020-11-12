<?php
session_start();

include_once 'setting.php'; 


function Headers($titleName){
	echo '
	<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="resource/css/style.css">
<script src="resource/libs/angular.min.js"></script>
<script src="resource/js/main.js"></script>



  <title>'.$titleName.'</title>
</head>
<body ng-app="myApp" ng-controller="myCtrl">';
}



function Footers()
{
	echo '</body>';
	echo '';
}






$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$URL_Parts = explode('/', trim($URL_Path, ' /'));
$Page = array_shift($URL_Parts);
$Module = array_shift($URL_Parts);


if (in_array($Page, array('logout', 'accountProcess','AddProcess')) && empty($Module)) {

		include("page/$Page.php");
}




else if ($Page == 'admin'){

	if(in_array($Module, array('main'))){
		$titleName = 'Админка';
		include("module/admin/$Module.php");
	}else{
		$titleName = 'Админка';
		include("module/admin/main.php");
	}
}


else if ($Page == 'test' || $_SERVER['REQUEST_URI'] == '/'){

	if(in_array($Module, array('main'))){
		$titleName = 'Главная';
		include("module/test/$Module.php");
	}else{
		$titleName = 'Главная';
		include("module/test/main.php");
	}
}




else{
	$titleName = 'Ошибка 404';
	include("page/Error404.php");
};


?>