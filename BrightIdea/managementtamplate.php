<?php
/**
 * Template Name: Management Template
 **/
?>
<?php get_header();?>
		
	<div class="container">
	<div class="row">
		<div class="grid-test col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<div class="lamp">
				<span class="h1"><button type="button" class="button_1">Management</button></span>			
				<h1>Management</h1>
				
				<img src="<?php echo get_template_directory_uri(); ?>\img\lamp.png" alt="">	
				<span class="h4"><button type="button" class="button_2">Программа<br>курса</button></span>
			</div>
		</div>
		<div class="grid-test col-lg-5 col-md-5 col-sm-5 col-xs-5 h5 text-right txt left">	
			<p>
				Специфика языка программирования PHP: синтаксис,<br>
				переменные, константы, типы данных, выражения,<br>
				операции, приоритет выполнения операций, операторы<br>
				инкремента и декремента.
			</p>
			<div class="line_1"></div>
			<p>
				Конструкции языка - if-else, do-while, for, foreach,<br>
				switch - case, require, include и другие.
			</p>
			<div class="line_1"></div>
			<p>
				Функциию. Встроенные и пользовательские функции.
			</p>
			
			<div class="line_1"></div>
			<p>
				Регулярные выражения и функции для работы с ними.
			</p>
			<div class="line_1"></div>
			<p>
				Реляционные базы данных. Работа с базой данных MySql:<br>
				проектирование, создание, нормализация и оптимизация.<br>
				Инструменты для работы с Базой Данных.
			</p>
			<div class="line_1"></div>
			<p>
				Взаимодействие клиента и сервера. AJAX, JSON, XML.<br>
				Взаимодействие с удаленными серверами, CURL.
			</p>
			<div class="line_1"></div>
			<p>
				Генерация PDF, Excel, CSV. Загрузка данных на сайт<br>
				из файла.
			</p>
			<div class="line_1"></div>
			<p>
				Обзор основных CMC и Фрейморков.
			</p>
			<div class="line_1"></div>
			<p>
				Работа над собственными PHP проектами.
			</p>
			<div class="line_1"></div>
		
		</div>	
		<div class="grid-test col-lg-2 col-md-2 col-sm-2 col-xs-2 container">
			<div class="row">
				<div class="grid-test col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			
					<div class="vline_circle">
						<div class="vline">
							<p><b>1</b></p>
							<p><b>2</b></p>
							<p><b>3</b></p>
							<p><b>4</b></p>
							<p><b>5</b></p>
							<p><b>6</b></p>
							<p><b>7</b></p>
							<p><b>8</b></p>
							<p><b>9</b></p>
							<p><b>10</b></p>
							<p><b>11</b></p>
							<p><b>12</b></p>
							<p><b>13</b></p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="grid-test col-lg-5 col-md-5 col-sm-5 col-xs-5 h5 txt right">
			<p>
				Основы Web-программирования. Возможности,
				задачи и применение PHP. Среда выполнения.
				Инструменты разработки. Взаимодействие PHP,
				HTML, CSS, JS. Структура будущего сайта.
			</p>
			<div class="line_2"></div>
			<p>
				Пользовательские формы, HTTP-методы, GET & POST,
				передача данных на сервер при помощи форм.
			</p>
			<div class="line_2"></div>
			<p>
				Работа с массивами, доступ к данным, сортировка,
				глобальные массивы.
			</p>
			<div class="line_2"></div>
			<p>
				Работа с файлами, сохранение данных в файл.
			</p>
			<div class="line_2"></div>
			<p>
				Cookies и сессии, авторизация на сайте, организация
				доступа к разделам сайта при помощи сессии,
				роли пользователей.
			</p>
			<div class="line_2"></div>
			<p>
				Использование функций в SQL. Практика сложных запросов.
			</p>
			<div class="line_2"></div>
			<p>
				Объектно-ориентированное программирование программирование: классы
				и объекты, наследование, полиформизм, инкапсуляция
				данных, перегрузка методов, магические методы,
				анонимные функции.
			</p>
			<div class="line_2"></div>
			<p>
				Git репозиторий и командная работа над кодом.
			</p>
			<div class="line_2"></div>
			<p>
				Парадигма MVC: model, view, controller. Практика
				использования на реальном коммерческом проекте.
			</p>
			<div class="line_2"></div>	
		</div>
		
					
	</div>

</div>
	

<div class="wrap">
	<div class="container1 text-center container">
		<div class="row">
			
				<div class="grid-test col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12">
					<p><img src="<?php echo get_template_directory_uri(); ?>\img\icon1.png" align="left" alt="">
						Начало 18.09.17<br>
						Окончание 20.11.17
					</p>	
					<p><img src="<?php echo get_template_directory_uri(); ?>\img\icon2.png" align="left" alt="">
						Среда 16.00-18.00<br>	
						Суббота 14.00-16.00	
					</p>
					<p><img src="<?php echo get_template_directory_uri(); ?>\img\icon3.png" align="left" alt="">
						5 000 грн
					</p>				
				</div>
						
				<div class="grid-test col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<?php echo do_shortcode( '[contact-form-7 id="351" title="Contact form 2"]' ); ?>
				</div>
		</div>
	</div>
</div>		

<?php get_footer();?>