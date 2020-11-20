<?= Headers($titleName); ?>


<div class="bg-header">
	



<div class="ul-categories">
	<div ng-click="startfizika()"><span>Физика</span><span class="down1"></span></div>
	<div ng-click="startprogramming()"><span>Программирование</span><span class="down2"></span></div>
	<div ng-click="startinform()"><span>Информатика</span><span class="down3"></span></div>
	<div ng-click="startenglish()"><span>English</span><span class="down4"></span></div>
</div>


</div>

<!-- Физика -->

<div class="form-main" id="fizika">


<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




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






	</div>








	<div class= "right-side">


<div class="start-Test">
<span ng-click="starttest()">Старт</span>
</div>

<div class="stop-Test">
<span ng-click="fintest()">Стоп</span>
</div>




<div class="dstart-Testu">
<span id="Setting">Настройки</span>


</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div>







	</div>
</div>



























</main>
</div>



<!-- Программирование -->

<div class="form-main" id="programming">




<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




<div class="dstart-Test">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins">
	<span class="info-termins">

		<div ng-repeat="title in myWelcomeprog | filter: 'on'" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	





	<div class="block-testing-main">

		<div class="info-testing-main">
<div ng-repeat="titas in myNumbprog">
			<div class="name-info-block">
				<span ng-repeat="title in myWelcomeprog | filter: {class : titas} | limitTo: 1">{{title.name}}</span>
			</div>

			<a ng-repeat="title in myWelcomeprog | filter: {class : titas}" class="block-repeat">
				<div class="under f{{title.bool}}{{statusclick}}" id = "s{{title.id}}" ng-click="clicktest(title.id,title.bool)">


				<span>{{title.describes}}</span><br>
				</div>
			</a>
</div>

		</div>
	</div>


<div class="next-Test">
<span ng-click="starttestprog()">Некст</span>
</div>






	</div>








	<div class= "right-side">


<div class="start-Test">
<span ng-click="starttest()">Старт</span>
</div>

<div class="stop-Test">
<span ng-click="fintest()">Стоп</span>
</div>




<div class="dstart-Testu">
<span id="Setting">Настройки</span>


</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div>







	</div>
</div>



























</main>
</div>
<!-- Информатика -->

<div class="form-main" id="inform">


<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




<div class="dstart-Test">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins">
	<span class="info-termins">

		<div ng-repeat="title in myWelcomeinf | filter: 'on'" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	





	<div class="block-testing-main">

		<div class="info-testing-main">
<div ng-repeat="titas in myNumbinf">
			<div class="name-info-block">
				<span ng-repeat="title in myWelcomeinf | filter: {class : titas} | limitTo: 1">{{title.name}}</span>
			</div>

			<a ng-repeat="title in myWelcomeinf | filter: {class : titas}" class="block-repeat">
				<div class="under f{{title.bool}}{{statusclick}}" id = "s{{title.id}}" ng-click="clicktest(title.id,title.bool)">


				<span>{{title.describes}}</span><br>
				</div>
			</a>
</div>

		</div>
	</div>


<div class="next-Test">
<span ng-click="starttestinf()">Некст</span>
</div>






	</div>








	<div class= "right-side">


<div class="start-Test">
<span ng-click="starttest()">Старт</span>
</div>

<div class="stop-Test">
<span ng-click="fintest()">Стоп</span>
</div>




<div class="dstart-Testu">
<span id="Setting">Настройки</span>


</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div>







	</div>
</div>



























</main>
</div>
<!-- Англ яз -->

<div class="form-main" id="english">



<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




<div class="dstart-Test">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins">
	<span class="info-termins">

		<div ng-repeat="title in myWelcomeeng | filter: 'on'" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	





	<div class="block-testing-main">

		<div class="info-testing-main">
<div ng-repeat="titas in myNumbeng">
			<div class="name-info-block">
				<span ng-repeat="title in myWelcomeeng | filter: {class : titas} | limitTo: 1">{{title.name}}</span>
			</div>

			<a ng-repeat="title in myWelcomeeng | filter: {class : titas}" class="block-repeat">
				<div class="under f{{title.bool}}{{statusclick}}" id = "s{{title.id}}" ng-click="clicktest(title.id,title.bool)">


				<span>{{title.describes}}</span><br>
				</div>
			</a>
</div>

		</div>
	</div>


<div class="next-Test">
<span ng-click="starttesteng()">Некст</span>
</div>






	</div>








	<div class= "right-side">


<div class="start-Test">
<span ng-click="starttest()">Старт</span>
</div>

<div class="stop-Test">
<span ng-click="fintest()">Стоп</span>
</div>




<div class="dstart-Testu">
<span id="Setting">Настройки</span>


</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div>







	</div>
</div>



























</main>
</div>
<style>
	.start-Test{display: {{dispnone1}};}
	.next-Test{display: {{dispnone2}};}
	.stop-Test{display: {{dispnone2}};}
	.dstart-Test{display: {{dispnone1}};}
	.block-info-termins{display: {{dispnone1}};}
	.block-info-setting{display: /*{{dispnone1}}*/;}
	.block-testing-main{display: {{dispnone2}};}
	#s{{titleid}}{
		border: {{statbrad}};
		background: {{colortest}};
	}

	#fizika{
		display: {{fizikablock}};
	}
	#programming{
		display: {{progblock}};
	}
	#inform{
		display: {{informblock}};
	}
	#english{
		display: {{engblock}};
	}
	.down1{background:{{down1}};}
	.down2{background:{{down2}};}
	.down3{background:{{down3}};}
	.down4{background:{{down4}};}
</style>

<?= Footers(); ?>