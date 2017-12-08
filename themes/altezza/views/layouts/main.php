<?php

use app\themes\altezza\assets\AltezzaAsset;
use yii\helpers\Html;

$bundle = AltezzaAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language?>">
<head>
	<title><?= Html::encode($this->title)?></title>
	<!-- Required meta tags -->
	<meta charset="<?= Yii::$app->charset?>">
    <?= Html::csrfMetaTags()?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= $bundle->baseUrl ?>/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?= $bundle->baseUrl ?>/favicon.ico" type="image/x-icon" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container" id="container">

	<section id="header">
		<div class="row">
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 logo">
				<a href="#" class="img-fluid"><img src="img/logo.png"></a>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 numbers">
				<p id="number">+7 (812) <span>645</span>-70-95</p>
				<p id="number">+7 (812) <span>946</span>-26-70</p>
				<p id="worktime"><img src="img/call-center.png">с 9:00 до 22:00 без выходных</p>
				<p id="worktime"><img src="img/ofis.png">с 11:00 до 20:00 без выходных</p>
			</div>
			<div class="col-md-4 col-lg-3 col-xl-3 director d-none d-md-block d-lg-block d-xl-block">
				<p>Нет возможности позвонить?</p>
				<button class="btn btn-outline-success">
					МЫ ВАМ ПЕРЕЗВОНИМ
				</button>
				<p id="writetodir"><img src="img/director.png"><a href="#">НАПИСАТЬ ДИРЕКТОРУ</a></p>
			</div>
			<div class="col-lg-3 col-xl-3 submenu_h  d-none d-lg-block d-xl-block">
				<p><a href="#">Офисы продаж</a></p>
				<p><a href="#">Сотрудничайте с нами</a></p>
				<p><a href="#">Производители и страны</a></p>
			</div>
		</div>

		<div class="row" id="header_menu">
			<nav>
				<ul class="topmenu">
					<li><a href="">Главная</a>
						<ul class="submenu">
							<li><a href="">Полезная информация</a></li>
						</ul>
					</li>
					<li><a href="">Потолки</a>
						<ul class="submenu">
							<li><a href="">Матовые натяжные потолки</a></li>
							<li><a href="">Сатиновые натяжные потолки</a></li>
							<li><a href="">Глянцевые натяжные потолки</a></li>
							<li><a href="">Тканевые натяжные потолки</a></li>
							<li><a href="">Многоуровневые натяжные потолки</a></li>
							<li><a href="">Звёздное небо</a></li>
							<li><a href="">Стильные натяжные потолки</a></li>
							<li><a href="">Калькулятор</a></li>
							<li><a href="">Потолки с фотопечатью</a></li>
						</ul>
					</li>
					<li><a href="">Монтаж потолков</a>
						<ul class="submenu">
							<li><a href="">Монтаж тканевых потолков</a></li>
							<li><a href="">Монтаж двухуровневых потолков</a></li>
							<li><a href="">Установка многоуровневых натяжных потолков</a></li>
						</ul>
					</li>
					<li><a href="">Отзывы</a></li>
					<li><a href="">Освещение</a></li>
					<li><a href="">Акции и скидки</a></li>
					<li><a href="">Другие услуги</a></li>
					<li><a href="">Калькулятор</a></li>
					<li><a href="">Наши работы</a></li>
					<li><a href="">Контакты</a></li>
				</ul>
			</nav>
		</div>

		<div class="row" id="header_slider">
			<div class="slider">
				<div id="slides"><img src="img/slide1.jpg"></div>
				<div id="slides"><img src="img/slide2.jpg"><span id="slidetext">
              <p id="slidetext1">Осенний ценопад скидка 50%</p>
              <p id="slidetext2">на бельгийский бесшовный потолок от студии Altezza</p>
            </span>
				</div>
				<div id="slides"><img src="img/slide3.jpg">
					<span id="slideText">
              <p id="slidetext1">Скидка 20%</p>
              <p id="slidetext2">ветеранам, пенсионерам и новосёлам</p>
            </span></div>
				<div id="slides"><img src="img/slide4.jpg"><span id="slideText">
              <p id="slidetext1">Каждый пятый метр бесплатно!</p>
              <p id="slidetext2">Супер акция на потолки с фотопечатью</p>
            </span></div>
				<div id="slides"><img src="img/slide5.jpg"><span id="slideText">
              <p id="slidetext1">Осенние скидки 20%</p>
              <p id="slidetext2">на тканевые потолки</p>
            </span></div>
				<div id="slides"><img src="img/slide6.jpg"><span id="slideText">
              <p id="slidetext1">Идеальная чистота ваших потолков</p>
              <p id="slidetext2">Моющее средство для натяжных потолков бесплатно каждому клиенту</p>
            </span></div>
			</div>
		</div>
	</section>
    <?= $content;?>
	<div class="line">
	</div>

</div>
<section id="footer">
	<div class="container footer">
		<div class="row text-center">
			<div class="col-sm-3">
				<p id="caption">Потолки</p>
				<ul>
					<li><a href="#">Матовые натяжные потолки</a></li>
					<li><a href="#">Сатиновые натяжные потолки</a></li>
					<li><a href="#">Глянцевые натяжные потолки</a></li>
					<li><a href="#">Тканевые потолки</a></li>
					<li><a href="#">Многоуровневые натяжные потолки</a></li>
					<li><a href="#">Звёздное небо</a></li>
					<li><a href="#">Стильные натяжные потолки</a></li>
					<li><a href="#">Калькулятор</a></li>
					<li><a href="#">Потолки с фотопечатью</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<p id="caption">Светильники</p>
				<ul>
					<li><a href="#">Светильники</a></li>
					<li><a href="#">Лампочки</a></li>
					<li><a href="#">Led - ленты</a></li>
				</ul>
			</div>
			<div class="col-sm3-">
				<p id="caption">Офис продаж</p>
				<ul>
					<li><a href="#" id="adress"><p>Санкт-Петербург</p>
							<p>Московский проспект д.65 литер Б</p></a></li>
				</ul>
			</div>
			<div class="col-sm-3 footlogo">
				<img src="img/foot-logo.png">
				<p>студия потолков © 2003</p>
				<img src="img/phone.png">
				<p id="numberfooter">(812) <span>645</span>-70-95</p>
				<p id="worktimefoot">С 9:00 до 20:00 без выходных</p>
			</div>
			<div class="col-sm-12">
				<p id="caption">Навигация</p>
			</div>
			<div class="col-sm-12 footmenu">
				<ul>
					<li><a href="#">Главная</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Натяжные потолки</a></li>
					<li><a href="#">Наши работы</a></li>
					<li><a href="#">Полезная информация</a></li>
				</ul>
			</div>
			<div class="row last">
				Монтаж натяжных потолков в СПб и пригороде. Мы работаем в районах Ленинградской области: Всеволожск, Гатчина, Зеленогорск, Кронштадт, Петергоф, Пушкин, Колпино, Тельмана, Большая Ижора, Павловск, Репино, Красное село, Сертолово, Выборг, Бугры, Сестрорецк, Юкки, Лисий нос, Волхов, Петродворец, Ломоносов, Сосновый бор, Колтуши, Тосно, Кировск, Металлострой, Токсово, Шлиссельбург, Белоостров, Отрадное, Разметелево, Стрельна, Коммунар, Никольское, Ропша, Синявино, Волосово, Янино, Мга, Копорье, Вырица, Щеглово, Дубровка, Приладожский, Вартемяги, Поселок Морозова, Горбунки, Тайцы, Аннино, Горелово, Кисельня, Новосаратовка, Петро-Славянка, Поселок Свердлова, Русско-высоцкое, Сиверский, Фарносово.
			</div>
		</div>
	</div>
</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
