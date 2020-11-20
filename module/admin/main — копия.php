<?= Headers($titleName); ?>
<div><a href="/">Главная</a></div>

<?php 

if ($_SESSION['auth'] == 1){
echo '<div class="centeradmin"><a href="logout">Выход</a>';
echo '

<form action="/AddProcess" method="POST" style="margin-top: 50px;">
	Название термина:	<br><input type="text" name="name"><br><br>
	Термин: 			<br><input type="text" name="describes"><br><br>
	Группа: 			<br><input type="text" name="class"><br><br>
	BOOL: 				<br><input type="checkbox" name="bool"><br><br>
	<input type="submit" name="insert-Go" value="Добавить">


</form>


<div class="list-example-admin" style="	text-align: center;background: green;margin-top: 100px;">
	<span class="name-admin-e">Название</span>
	<span class="termin-admin-e">Термин</span>
	<span class="class-admin-e">Группа</span>
		<span class="del-admin-e">Удалить</span>
	<span class="bool-admin-e">Истинность</span>

</div>
<div class="list-example-admin" ng-repeat="title in myWelcome | orderBy: \'-class\'" >
	<span class="name-admin-e" style="	text-align: center;">{{title.name}}</span>
	<span class="termin-admin-e">{{title.describes}}</span>
	<span class="class-admin-e" style="	text-align: center;">{{title.class}}</span>
		<span class="del-admin-e" style="	text-align: center;" ><button ng-click="deletedata(title.id)"> Удалить </button></span>
	<span class="bool-admin-e" style="	text-align: center;">{{title.bool}}</span>

</div></div>
' ;

}
else{

echo '<div class="centeradmin"><div style="margin-top: 50px;display: block;">Вход</div>
<form method="POST" action="/accountProcess">
	
<br><input type="text" name="login" placeholder="Логин" maxlength="10" pattern="[A-Za-z-0-9]{3,10}" title="Не менее 3 и неболее 10 латынских символов или цифр." required>
<br><input type="password" name="password" placeholder="Пароль" maxlength="15"  pattern="[A-Za-z-0-9]{5,15}" title="Не менее 5 и неболее 15 латынских символов или цифр." required>
<br><br><input type="submit" name="enter_l" value="Вход">

</form></div>';

}

 ?>
<!-- 

<form action="/AddProcess" method="POST" style="margin-top: 50px;">
	Название термина:	<br><input type="text" name="name"><br><br>
	Термин: 			<br><input type="text" name="describes"><br><br>
	Группа: 			<br><input type="text" name="class"><br><br>
	BOOL: 				<br><input type="checkbox" name="bool"><br><br>
	<input type="submit" name="insert-Go" value="Добавить">


</form>


<div class="list-example-admin" style="	text-align: center;background: green;margin-top: 100px;">
	<span class="name-admin-e">Название</span>
	<span class="termin-admin-e">Термин</span>
	<span class="class-admin-e">Группа</span>
		<span class="del-admin-e">Удалить</span>
	<span class="bool-admin-e">Истинность</span>

</div>
<div class="list-example-admin" ng-repeat="title in myWelcome | orderBy: '-class'" >
	<span class="name-admin-e" style="	text-align: center;">{{title.name}}</span>
	<span class="termin-admin-e">{{title.describes}}</span>
	<span class="class-admin-e" style="	text-align: center;">{{title.class}}</span>
		<span class="del-admin-e" style="	text-align: center;" ><button ng-click="deletedata(title.id)"> Удалить </button></span>
	<span class="bool-admin-e" style="	text-align: center;">{{title.bool}}</span>

</div>
 -->

<!-- <div class="list-example-admin">
	<span><div>	Название</div></span>
	<span><div>	Т ерминfffffffffffffffffffff ерминfffffffffffffffffffff ерминfffffffffffffffffffff ерминfffffffffffffffffffff</div></span>
	<span><div>	Группа</div></span>
	<span><div>	Истинность</div></span>

</div>
 -->










<?= Footers(); ?>