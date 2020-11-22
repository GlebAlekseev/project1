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

<div class="form-main" id="fizika" ng-cloak>


<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




<div class="dstart-Test" id="nameterminfiz">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins" id="terminsfiz">
	<span class="info-termins">

		<div ng-repeat="title in myWelcome | filter: 'on'" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	





	<div class="block-testing-main" id="testingfiz">

		<div class="info-testing-main">
<div ng-repeat="titas in myNumb">
			<div class="name-info-block">
				<span ng-repeat="title in myWelcome | filter: {class : titas} | limitTo: 1">{{title.name}}</span>
			</div>

			<a ng-repeat="title in myWelcome | filter: {class : titas}  | orderBy: myNumb.sort" class="block-repeat">
				<div class="under f{{title.bool}}{{statusclickf}}" id = "sf{{title.id}}" ng-click="clicktestf(title.id,title.bool)">


				<span>{{title.describes}}</span><br>
				</div>
			</a>
</div>

		</div>
	</div>


<div class="next-Test" id="nexttestfiz">
<span ng-click="starttest()">Некст</span>
</div>






	</div>








	<div class= "right-side">


<div class="start-Test" id="startfiz">
<span ng-click="starttest()">Старт</span>
</div>

<div class="stop-Test" id="stopfiz">
<span ng-click="fintest()">Стоп</span>
</div>




<div class="dstart-Testu">
<span id="Setting">Статистика</span>
</div>

<div class="block-info-stats">
	<span class="info-stats">
		<div class="stats-funcs">
			<span style="color:white;background: green;">{{numfw}}</span>
			<span style="color:white; background: red;">{{numfl}}</span>
		</div>
	</span>
</div>


<!-- 
<div class="dstart-Testu">
<span id="Setting">Настройки</span>
</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div> -->







	</div>
</div>



























</main>
</div>


<!-- Программирование -->

<div class="form-main" id="programming" ng-cloak>




<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




<div class="dstart-Test" id="nameterminprog">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins" id="terminsprog">
	<span class="info-termins">

		<div ng-repeat="title in myWelcomeprog | filter: 'on'" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	





	<div class="block-testing-main" id="testingprog">

		<div class="info-testing-main">
<div ng-repeat="titas in myNumbprog">
			<div class="name-info-block">
				<span ng-repeat="title in myWelcomeprog | filter: {class : titas} | limitTo: 1">{{title.name}}</span>
			</div>

			<a ng-repeat="title in myWelcomeprog | filter: {class : titas} | orderBy: myNumbprog.sort" class="block-repeat">
				<div class="under f{{title.bool}}{{statusclickp}}" id = "sp{{title.id}}" ng-click="clicktestp(title.id,title.bool)">


				<span>{{title.describes}}</span><br>
				</div>
			</a>
</div>

		</div>
	</div>


<div class="next-Test" id="nexttestprog">
<span ng-click="starttestprog()">Некст</span>
</div>






	</div>








	<div class= "right-side">


<div class="start-Test" id="startprog">
<span ng-click="starttestprog()">Старт</span>
</div>

<div class="stop-Test" id="stopprog">
<span ng-click="fintestprog()">Стоп</span>
</div>

<div class="dstart-Testu">
<span id="Setting">Статистика</span>
</div>

<div class="block-info-stats">
	<span class="info-stats">
		<div class="stats-funcs">
			<span style="color:white;background: green;">{{numpw}}</span>
			<span style="color:white; background: red;">{{numpl}}</span>
		</div>
	</span>
</div>


<!-- <div class="dstart-Testu">
<span id="Setting">Настройки</span>


</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div>

 -->





	</div>
</div>



























</main>
</div>
<!-- Информатика -->

<div class="form-main" id="inform" ng-cloak>


<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




<div class="dstart-Test" id="nametermininf">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins" id="terminsinf">
	<span class="info-termins">

		<div ng-repeat="title in myWelcomeinf | filter: 'on'" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	





	<div class="block-testing-main" id="testinginf">

		<div class="info-testing-main">
<div ng-repeat="titas in myNumbinf">
			<div class="name-info-block">
				<span ng-repeat="title in myWelcomeinf | filter: {class : titas} | limitTo: 1">{{title.name}}</span>
			</div>

			<a ng-repeat="title in myWelcomeinf | filter: {class : titas}  | orderBy: myNumbinf.sort"" class="block-repeat">
				<div class="under f{{title.bool}}{{statusclicki}}" id = "si{{title.id}}" ng-click="clicktesti(title.id,title.bool)">


				<span>{{title.describes}}</span><br>
				</div>
			</a>
</div>

		</div>
	</div>


<div class="next-Test" id="nexttestinf">
<span ng-click="starttestinf()">Некст</span>
</div>






	</div>








	<div class= "right-side">


<div class="start-Test" id="startinf">
<span ng-click="starttestinf()">Старт</span>
</div>

<div class="stop-Test" id="stopinf">
<span ng-click="fintestinf()">Стоп</span>
</div>


<div class="dstart-Testu">
<span id="Setting">Статистика</span>
</div>

<div class="block-info-stats">
	<span class="info-stats">
		<div class="stats-funcs">
			<span style="color:white;background: green;">{{numiw}}</span>
			<span style="color:white; background: red;">{{numil}}</span>
		</div>
	</span>
</div>

<!-- <div class="dstart-Testu">
<span id="Setting">Настройки</span>


</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div>

 -->





	</div>
</div>



























</main>
</div>
<!-- Англ яз -->

<div class="form-main" id="english" ng-cloak>



<main class="main-Test">




<div class="full-window">
	<div class = "left-side">




<div class="dstart-Test" id="nametermineng">
<span id="Termins">Термины</span>
</div>

<div class="block-info-termins" id="terminseng">
	<span class="info-termins">
		<div ng-repeat="title in myWelcomeenglist" class="block-termin-m">
			<div class="name-main">{{title.name}}</div>
			
			<div class="describes-main">{{title.describes}}</div>
		</div>

		
	</span>
	

</div>




	

<div style="color:black;">


</div>


	<div class="block-testing-main" id="testingeng">

		<div class="info-testing-main">
<!-- <div ng-repeat="titas in myNumbeng"> -->
			<div class="name-info-block">
				<span>{{myWelcomeeng.name}}</span>
			</div>

			<a class="block-repeat">
				<div class="under f{{title.bool}}{{statusclicke}}" id = "se1" ng-click="clickteste(myWelcomeeng.id1,myWelcomeeng.idwin,1)">
				<span>{{myWelcomeeng.descr1}}</span><br>
				</div>
			</a>
			<a class="block-repeat">
				<div class="under f{{title.bool}}{{statusclicke}}" id = "se2" ng-click="clickteste(myWelcomeeng.id2,myWelcomeeng.idwin,2)">
				<span>{{myWelcomeeng.descr2}}</span><br>
				</div>
			</a>
			<a class="block-repeat">
				<div class="under f{{title.bool}}{{statusclicke}}" id = "se3" ng-click="clickteste(myWelcomeeng.id3,myWelcomeeng.idwin,3)">
				<span>{{myWelcomeeng.descr3}}</span><br>
				</div>
			</a>
			<a class="block-repeat">
				<div class="under f{{title.bool}}{{statusclicke}}" id = "se4" ng-click="clickteste(myWelcomeeng.id4,myWelcomeeng.idwin,4)">
				<span>{{myWelcomeeng.descr4}}</span><br>
				</div>
			</a>


<!-- </div> -->

		</div>
	</div>


<div class="next-Test" id="nexttesteng" style="margin-top: 50px;">
<span ng-click="starttesteng()">Некст</span>
</div>






	</div>








	<div class= "right-side">


<div class="start-Test" id="starteng">
<span ng-click="starttesteng()">Старт</span>
</div>

<div class="stop-Test" id="stopeng">
<span ng-click="fintesteng()">Стоп</span>
</div>

<div class="dstart-Testu">
<span id="Setting">Статистика</span>
</div>

<div class="block-info-stats">
	<span class="info-stats">
		<div class="stats-funcs">
			<span style="color:white;background: green;">{{numew}}</span>
			<span style="color:white; background: red;">{{numel}}</span>
		</div>
	</span>
</div>


<!-- <div class="dstart-Testu">
<span id="Setting">Настройки</span>


</div>


<div class="block-info-setting">
	<span class="info-setting">
		<div class="settings-funcs">
			Какие-то настройки
		</div>
	</span>
</div>


 -->




	</div>
</div>



























</main>
</div>
<style>

	#sf{{titleidf}}{
		border: {{statbradf}};
		background: {{colortestf}};
	}

		#sp{{titleidp}}{
		border: {{statbradp}};
		background: {{colortestp}};
	}

		#si{{titleidi}}{
		border: {{statbradi}};
		background: {{colortesti}};
	}

		#se1{
		border: {{statbrade1}};
		background: {{colorteste1}};
	}

		#se2{
		border: {{statbrade2}};
		background: {{colorteste2}};
	}

		#se3{
		border: {{statbrade3}};
		background: {{colorteste3}};
	}

		#se4{
		border: {{statbrade4}};
		background: {{colorteste4}};
	}



	#fizika{
			transition: 0.3s ease 0.1s;
		display: {{fizikablock}};

	}
	#programming{
			transition: 0.3s ease 0.1s;
		display: {{progblock}};

	}
	#inform{
			transition: 0.3s ease 0.1s;
		display: {{informblock}};

	}
	#english{
			transition: 0.3s ease 0.1s;
		display: {{engblock}};

	}
	.down1{background:{{down1}};}
	.down2{background:{{down2}};}
	.down3{background:{{down3}};}
	.down4{background:{{down4}};}






	#nameterminfiz{display: {{dispnone1fiz}};}
	#terminsfiz{display: {{dispnone1fiz}};}
	#testingfiz{display: {{dispnone2fiz}};}
	#nexttestfiz{display: {{dispnone2fiz}};}
	#startfiz{display: {{dispnone1fiz}};}
	#stopfiz{display: {{dispnone2fiz}};}

	#nameterminprog{display: {{dispnone1prog}};}
	#terminsprog{display: {{dispnone1prog}};}
	#testingprog{display: {{dispnone2prog}};}
	#nexttestprog{display: {{dispnone2prog}};}
	#startprog{display: {{dispnone1prog}};}
	#stopprog{display: {{dispnone2prog}};}

	#nametermininf{display: {{dispnone1inf}};}
	#terminsinf{display: {{dispnone1inf}};}
	#testinginf{display: {{dispnone2inf}};}
	#nexttestinf{display: {{dispnone2inf}};}
	#startinf{display: {{dispnone1inf}};}
	#stopinf{display: {{dispnone2inf}};}

	#nametermineng{display: {{dispnone1eng}};}
	#terminseng{display: {{dispnone1eng}};}
	#testingeng{display: {{dispnone2eng}};}
	#nexttesteng{display: {{dispnone2eng}};}
	#starteng{display: {{dispnone1eng}};}
	#stopeng{display: {{dispnone2eng}};}


/*	.start-Test{display: {{dispnone1}};}
	.next-Test{display: {{dispnone2}};}
	.stop-Test{display: {{dispnone2}};}
	.dstart-Test{display: {{dispnone1}};}
	.block-info-termins{display: {{dispnone1}};}
	.block-info-setting{display: ;}
	.block-testing-main{display: {{dispnone2}};}*/


</style>

<?= Footers(); ?>