<?= Headers($titleName); ?>

<main class="main-Test">
	
<div class="ul-categories">
	<span>Физика</span>
</div>


<div class="start-Test">
<span ng-click="starttest()">Старт</span>
</div>

<div class="stop-Test">
<span ng-click="fintest()">Стоп</span>
</div>


<div class="dstart-Test">
<span id="Setting">Настройки</span>


</div>
<div class="block-info-setting">
	<span class="info-setting">
		

		<div class="settings-funcs">
			Какие-то настройки

		</div>

	</span>
</div>




<div class="dstart-Test">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins">
	<span class="info-termins">

		<div ng-repeat="title in myWelcome | filter: 'on'" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	



	<div class="block-testing-main">

		<div class="info-testing-main">
<div ng-repeat="titas in myNumb">
			<div class="name-info-block">
				<span ng-repeat="title in myWelcome | filter: {class : titas} | limitTo: 1">{{title.name}}</span>
			</div>

			<a ng-repeat="title in myWelcome | filter: {class : titas}" class="block-repeat">
				<div class="under f{{title.bool}}{{statusclick}}" id = "s{{title.id}}" ng-click="clicktest(title.id,title.bool)">


				<span>{{title.describes}}</span><br>
				</div>
			</a>
</div>

		</div>
	</div>


<div class="next-Test">
<span ng-click="starttest()">Некст</span>
</div>



</main>

<style>
	.start-Test{display: {{dispnone1}};}
	.next-Test{display: {{dispnone2}};}
	.stop-Test{display: {{dispnone2}};}
	.dstart-Test{display: {{dispnone1}};}
	.block-info-termins{display: {{dispnone1}};}
	.block-info-setting{display: {{dispnone1}};}
	.block-testing-main{display: {{dispnone2}};}
	#s{{titleid}}{
		border: {{statbrad}};
		background: {{colortest}};
	}

</style>

<?= Footers(); ?>