
<?php 
CheckAuthCookie($linkl);
 ?>
<?= Headers($titleName); ?>
<span>Обложка главной страницы</span>
<br>
<br>
<?php 

if ($_SESSION['auth'] == 1) {
	echo '<a href="profile">Профиль</a>';
	echo '<br>';
	echo '<a href="logout">Выход</a>';
	
}else{
	echo '<a href="account/">Войти</a>';

}


 ?>

 <div ng-controller="myCtrl">5 + 5 = {{myWelcome}}











 </div>

<?= Footers(); ?>


 <script>
 	

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
	$scope.btnClick = 'noneInsert';
	$scope.obj={'idisable':false};

	$scope.msg="WAIT";
	$scope.rowLimit=21;
	$scope.filterNameSt = 0; 
	$scope.filtername = "'nameru'";



 </script>