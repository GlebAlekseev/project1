<?= Headers($titleName); ?>
<div><a href="/">Главная</a></div>


<div class="centeradmin"><a href="logout">Выход</a>


<form action="/AddProcess" method="POST" style="margin-top: 50px;">
	Название термина:	<br><input type="text" name="name"><br><br>
	Термин: 			<br><input type="text" name="describes"><br><br>
	Группа: 			<br><input type="text" name="class"><br><br>
	BOOL: 				<br><input type="checkbox" name="bool"><br><br>
	BOOLFIZ: 				<br><input type="checkbox" name="boolfiz"><br><br>
	BOOLPROG: 				<br><input type="checkbox" name="boolprog"><br><br>
	BOOLINF: 				<br><input type="checkbox" name="boolinf"><br><br>
	BOOLENG: 				<br><input type="checkbox" name="booleng"><br><br>
	<input type="submit" name="insert-Go" value="Добавить">


</form>

<div class="toolad">
<div class="fizad" ng-click="fizad()">Физика</div>
<div class="progad" ng-click="progad()">Программирование</div>
<div class="infad" ng-click="infad()" ng-click="startenglish()">Информатика</div>
<div class="engad" ng-click="engad()">Англ яз</div>
</div>


<!-- Физика -->
<div class="fizbl">
	Физика<br>
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
</div>

<!-- Программирование -->
<div class="progbl">
	Программирование<br>
<div class="list-example-admin" style="	text-align: center;background: green;margin-top: 100px;">
	<span class="name-admin-e">Название</span>
	<span class="termin-admin-e">Термин</span>
	<span class="class-admin-e">Группа</span>
		<span class="del-admin-e">Удалить</span>
	<span class="bool-admin-e">Истинность</span>

</div>

<div class="list-example-admin" ng-repeat="title in myWelcomeprog | orderBy: '-class'" >
	<span class="name-admin-e" style="	text-align: center;">{{title.name}}</span>
	<span class="termin-admin-e">{{title.describes}}</span>
	<span class="class-admin-e" style="	text-align: center;">{{title.class}}</span>
		<span class="del-admin-e" style="	text-align: center;" ><button ng-click="deletedataprog(title.id)"> Удалить </button></span>
	<span class="bool-admin-e" style="	text-align: center;">{{title.bool}}</span>

</div>
</div>
<!-- Информатика -->
<div class="infbl">
	Информатика<br>
<div class="list-example-admin" style="	text-align: center;background: green;margin-top: 100px;">
	<span class="name-admin-e">Название</span>
	<span class="termin-admin-e">Термин</span>
	<span class="class-admin-e">Группа</span>
		<span class="del-admin-e">Удалить</span>
	<span class="bool-admin-e">Истинность</span>

</div>

<div class="list-example-admin" ng-repeat="title in myWelcomeinf | orderBy: '-class'" >
	<span class="name-admin-e" style="	text-align: center;">{{title.name}}</span>
	<span class="termin-admin-e">{{title.describes}}</span>
	<span class="class-admin-e" style="	text-align: center;">{{title.class}}</span>
		<span class="del-admin-e" style="	text-align: center;" ><button ng-click="deletedatainf(title.id)"> Удалить </button></span>
	<span class="bool-admin-e" style="	text-align: center;">{{title.bool}}</span>

</div>
</div>
<!-- Англ яз -->
<div class="engbl">
	Англ яз<br>
<div class="list-example-admin" style="	text-align: center;background: green;margin-top: 100px;">
	<span class="name-admin-e">Название</span>
	<span class="termin-admin-e">Термин</span>
	<span class="class-admin-e">Группа</span>
		<span class="del-admin-e">Удалить</span>
	<span class="bool-admin-e">Истинность</span>

</div>

<div class="list-example-admin" ng-repeat="title in myWelcomeeng | orderBy: '-class'" >
	<span class="name-admin-e" style="	text-align: center;">{{title.name}}</span>
	<span class="termin-admin-e">{{title.describes}}</span>
	<span class="class-admin-e" style="	text-align: center;">{{title.class}}</span>
		<span class="del-admin-e" style="	text-align: center;" ><button ng-click="deletedataeng(title.id)"> Удалить </button></span>
	<span class="bool-admin-e" style="	text-align: center;">{{title.bool}}</span>

</div>
</div>












<style>
	.fizbl{display: {{fizdisp}};}
	.progbl{display: {{progdisp}};}
	.infbl{display: {{infdisp}};}
	.engbl{display: {{engdisp}};}

</style>



</div>



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