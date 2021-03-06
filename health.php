<!DOCTYPE html>
<html>
<head>
	<title>Мое здоровье в цифрах</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/test.css" />
	<link rel="stylesheet" type="text/css" href="css/health.css" />
	<link rel="stylesheet" type="text/css" href="css/registration_login_windows.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<!--SCRIPTS-->
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="scripts/health.js"></script>	
	<script src="scripts/reason_models.js"></script>	
	<!-- JavaScript --> 
	<script src="jquery/jquery.maskedinput.min.js"></script>
</head>
<?php 
	include('get_indexes_values.php');
?>
<body>
	<!--#################################Header#################################-->
	<div class="header-menu">
	<div class="wrapper">
		<div class="menu-logo"></div>
		<div class="menu-nav">
			<a id="general-inf" href="" style="" onclick="return false"><p>Общие сведения</p></a>
			<a id="health-in-numbers" href="" style="" onclick="return false"><p>Моё здоровье в цифрах</p></a>
			<a id="my-documents" href="" style="" onclick="return false"><p>Мои документы</p></a>
			<a id="shop" href="" style="" onclick="return false"><p>Магазин</p></a>
			<a id="services" href="" style="" onclick="return false"><p>Сервисы</p></a>
		</div>
	</div>
</div>
	<!--#################################Main#################################-->
	<div class="main">
		<div class="lk health-in-numbers-wrapper ">
			<p>Личный кабинет</p>
			<p>Мое здоровье в цифрах</p>
		</div>

		<div class="indexes-header-wrapper">
			<div class="indexes-header">
				<p>Главные показатели<p/>
			</div>
		</div>
		
		<div class="main-four-indexes">
			<table class="main-indexes">
				<tr class="indexes-head">
					<th class="border-col"></th>
					<th class="date-col">Дата</th>
					<th class="index-col">Показатель</th>
					<th class="value-col">Значение</th>
					<th class="btn-col"></th>
					<th class="estimation-col">Оценка</th>
					<th class="graph-col">График</th>
					<th class="reason-col">Причина</th>
				</tr>
				<!--#################################Сholesterol#################################-->
				<tr class="main-indexes-row">
					<td class="border-col" id="cholesterol-brd"></td>
					<td class="date-col index-date" id="cholesterol-date">&mdash;</td>
					<td class="index-col index-name">Холестерин общий</td>
					<td class="value-col index-value">
						<span  class="index-span" id="cholesterol-span">&mdash;</span>
					</td>
					<td class="btn-col">
						<a type="button" class="pl-btn" id="cholesterol-btn" href="#">+</a>
					</td>
					<td class="estimation-col index-estimation" id="cholesterol-estm">&mdash;</td>
					<td class="graph-col index-graph">
						<div class="index-graph-img-wrapper"></div>
					</td>
					<td class="reason-col index-reason">
						<div class="index-reason-wrapper">
							<a href="#" class="index-reason-a" id="cholesterol-reason">Причина</a>
						</div>
					</td>
				</tr>
				<!--#################################Sugar#################################-->				
				<tr class="main-indexes-row">
					<td class="border-col" id="sugar-brd" ></td>
					<td class="date-col index-date" id="sugar-date">&mdash;</td>
					<td class="index-col index-name">Сахар</td>
					<td class="value-col index-value">
						<span class="index-span" id="sugar-span">&mdash;</span>
					</td>
					<td class="btn-col">
						<a type="button" class="pl-btn" id="sugar-btn" href="#">+</a>
					</td>
					<td class="estimation-col index-estimation" id="sugar-estm">&mdash;</td>
					<td class="graph-col index-graph">
						<div class="index-graph-img-wrapper"></div>
					</td>
					<td class="reason-col index-reason">
						<div class="index-reason-wrapper">
							<a href="#" class="index-reason-a" id="sugar-reason">Причина</a>
						</div>
					</td>
				</tr>
				<!--#################################Blood pressure#################################-->
				<tr class="main-indexes-row">
					<td class="border-col" id="blood-pressure-brd"></td>
					<td class="date-col index-date" id="blood-pressure-date">&mdash;</td>
					<td class="index-col index-name">Давление</td>
					<td class="value-col index-value">
						
						<div class="blood-spans-wrapper">
							<span id="blood-pressure-1" class="blood-pressure-span">&mdash;</span>
							<span class="blood-pressure-span"> на</span>
							<span id="blood-pressure-2" class="blood-pressure-span">&mdash;</span>
						</div>
					</td>
					<td class="btn-col">
						<a type="button" class="pl-btn" id="blood-btn" href="#">+</a>
					</td>
					<td class="estimation-col index-estimation" id="blood-pressure-estm">&mdash;</td>
					<td class="graph-col index-graph">
						<div class="index-graph-img-wrapper"></div>
					</td>
					<td class="reason-col index-reason">
						<div class="index-reason-wrapper">
							<a href="#" class="index-reason-a"  id="blood-reason">Причина</a>
						</div>
					</td>
				</tr>
				<!--#################################Weight#################################-->
				<tr class="main-indexes-row">
					<td class="border-col" id="weight-brd"></td>
					<td class="date-col index-date" id="weight-date">&mdash;</td>
					<td class="index-col index-name">Вес</td>
					<td class="value-col index-value">
						<span class="index-span" id="weight-span">&mdash;</span>
					</td>
					<td class="btn-col">
						<a type="button" class="pl-btn" id="weight-btn" href="#">+</a>
					</td>
					<td class="estimation-col index-estimation" id="weight-estm">&mdash;</td>
					<td class="graph-col index-graph">
						<div class="index-graph-img-wrapper"></div>
					</td>
					<td class="reason-col index-reason">
						<div class="index-reason-wrapper">
							<a href="#" class="index-reason-a"  id="weight-reason">Причина</a>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
	<!--#################################Footer#################################-->
		<div class="footer">
		<div class="contacts">
			<div class="social-media">
				<a class="social-OK"></a>
				<a class="social-VK"></a>
				<a class="social-FB"></a>
				<a class="social-IG"></a>
			</div>
			<div class="phone">+7 495 131-32-73</div>
			<div class="OOO">2016-2018 ООО «Здравствую»</div>
		</div>

		<div class="zdrav-menu">
			<p>Здравствую</p>
			<ul>
				<li><a>О нас</a></li>
				<li><a>FAQ</a></li>
				<li><a>Отзывы о сервисе</a></li>
				<li><a>Партнерская программа</a></li>
				<li><a>Команда</a></li>
				<li><a>Контакты</a></li>
			</ul>
		</div>

		<div class="documents">
			<p>Документы</p>
			<ul>
				<li><a>Миссия, цель, ценности</a></li>
				<li><a>Правила использования</a></li>
				<li><a>Обработка персональных данных</a></li>
			</ul>
		</div>
	</div>

	</div>
	
	
	
	<!--#################################Modal#################################-->
		<div id="health-modal">
			<div id="health-numbers-content">
				<div class="modal-window-body sm-body">
					<div class="modal-header" id="health_header">
						<span class="close" id="add-close">&times;</span>
						<div class="modal-title">Добавить</div>
					</div>
					<form id="code-form" class="modal-form">
						<div class="input-date">
							<p class="modal-label">Дата</p>
							<input type="date" class="modal-input" id="date">
						</div>
						<div class="modal-input-value">
							<p class="modal-label">Значение</p>
							<input type="text" class="modal-input" id="modal-index-value">
						</div>
						<a type="button" class="modal-btn" id="add-btn" >Добавить</a>
					</form>
				</div>
			</div>
		</div>
	<!--#################################Reason Modal#################################-->
	<div class="modal-window" id="reason-modal">
			<div class="modal-window-content" id="reason-modal-content">
				<div class="modal-window-body">
				
					<div class="modal-header sm-body" id="reason_header">
						<span class="close" id="reason-close">&times;</span>
						<div class="modal-title">Причины</div>
					</div>
					
					<div id="reason-container">
						<p id="index-norm"></p>
						<p id="my-index-value"></p>
						<p id="index-description"></p>

						<div id="possible-reasons-wrapper">
						</div>
						<p id="acticle-ref">
						<a id="acticle" href="#"></a></p>
						<div id="modal-recommendations">
							<p id="recommendations-p"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
</body>
</html>