<?php

session_start();

$userLogin = "";

if (isset($_SESSION["email"])) {
	$userLogin = $_SESSION["email"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<title>Лавка Чудес</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/swiper.min.css">
	<!-- Custom styles for this template -->
	<link href="css/main.css" rel="stylesheet">

	<?php
	if (isset($_SESSION["exception"])) {

		print("
		<script>
		$(document).ready(function()
		{
			alert('{$_SESSION["exception"]}');
		});
		</script>");

		unset($_SESSION["exception"]);
	}
	?>
</head>

<body>
	<header class="main-header container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand col-2" href="index.php"><img src="img/logo.png" alt=""></a>
			<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="my-nav" class="collapse navbar-collapse justify-content-between">
				<ul class="nav navbar-nav">
					<li class="nav-item active">
						<a class="nav-link text-uppercase" href="index.php">Главная <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="category.php">Категории</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="delivery.php">Доставка</a>
					</li>

				</ul>
				<div class="nav-user">
					<a href="basket.php" class="nav-btn basket-btn"><img src="img/svg/market.svg" alt=""></a>
					<button class="nav-btn user-btn"><img src="img/svg/user.svg" alt=""></button>
				</div>
			</div>
		</nav>
	</header>

	<main class="container">
		<div class="stocks_title">
			<p>Акции</p>
		</div>
		<section class="row stocks">
			<div class="stocks__main col-md-10">
				<img src="img/free-delivery.jpg" alt="">
			</div>
			<ul class="stocks__thumb col-md-2">
				<li><a href="img/free-delivery.jpg" target="stocks__main"><img src="img/free-delivery.jpg" alt=""></a></li>
				<li><a href="img/birthday.jpg" target="stocks__main"><img src="img/birthday.jpg" alt=""></a></li>
				<li><a href="img/gifts.jpg" target="stocks__main"><img src="img/gifts.jpg" alt=""></a></li>
			</ul>
		</section>

		<section class="popular-product">
			<div class="popular-product__title">
				<p>Популярные товары</p>
			</div>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swipe swiper-slide">
						<img src="img/product/ring/1.jpg" alt="">
						<div class="mask">
							<h2>Янтарное кольцо</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim libero natus explicabo, architecto tenetur. Consectetur quam, impedit quibusdam vel blanditiis.</p>
							<a href="product-card__ring.php" class="info">Подробнее</a>
						</div>
					</div>

					<div class="swipe swiper-slide">
						<img src="img/product/flash/1.jpg" alt="">
						<div class="mask">
							<h2>Флэш-карта</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, nemo animi praesentium nostrum expedita tempora. Cumque impedit natus itaque, modi.</p>
							<a href="product-card__flash.php" class="info">Подробнее</a>
						</div>
					</div>

					<div class="swipe swiper-slide">
						<img src="img/product/helmet/1.jpg" alt="">
						<div class="mask">
							<h2>Шлем виртуальной реальности</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nihil alias odio repellendus consequatur mollitia quasi soluta atque, id beatae?</p>
							<a href="product-card__helmet.php" class="info">Подробнее</a>
						</div>
					</div>

					<div class="swipe swiper-slide">
						<img src="img/product/tea/1.jpg" alt="">
						<div class="mask">
							<h2>Чайный набор</h2>
							<p>A cool description of some sort between these tags. I am so cool and awesomely awesome.</p>
							<a href="product-card__tea.php" class="info">Подробнее</a>
						</div>
					</div>

				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>


			<div class="product">
				<div class="product__item">
					<img src="img/product/ring/1.jpg" alt="">
					<h2>Lorem ipsum</h2>
					<a href="product-card__ring.php">Подробнее</a>
				</div>
				<div class="product__item">
					<img src="img/product/flash/1.jpg" alt="">
					<h2>Флэш-карта</h2>
					<a href="product-card__flash.php">Подробнее</a>
				</div>
				<div class="product__item">
					<img src="img/product/helmet/1.jpg" alt="">
					<h2>Шлем виртуальной реальности</h2>
					<a href="product-card__helmet.php" class="info">Подробнее</a>
				</div>
			</div>
		</section>

		<section class="address">
			<div class="address__wrapper col-md-5">
				<p class="address__title">Наши магазины</p>
				<p class="address__city">Челябинск:</p>
				<p class="adderss__subtitle">Ул.Чичерина, д. 37</p>
				<p class="adderss__subtitle">Ул.Кирова, д. 15А</p>
			</div>
			<div class="col-md-7 address__map">
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae020d59b99cf852b7f6e430872a0e3878c7e7695600dd836f8f6c5b55085f84f&amp;source=constructor" width="700" height="400" frameborder="0"></iframe>
		</section>
	</main>

	<footer class="main-footer ">
		<div class="footer-nav">
			<div class="container">
				<ul>
					<li><a href="index.php">Главная</a></li>
					<li><a href="category.php">Категории</a></li>
					<li><a href="delivery.php">Доставка</a></li>
				</ul>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container wrapper">
				<div class="footer-social">
					<p class="title">Соц. Сети</p>
					<ul class="social-list">
						<li class="social-item"><a href=""><img src="img/svg/vk.svg" alt=""></a></li>
						<li class="social-item"><a href=""><img src="img/svg/inst.svg" alt=""></a></li>
						<li class="social-item"><a href=""><img src="img/svg/e-mail.svg" alt=""></a></li>
					</ul>
				</div>
				<div class="footer-contacts">
					<p class="title">Контакты</p>
					<p>+7(952)511-18-23</p>
					<p>Челябинск: Ул. Чичерина, д. 39; Ул. Кирова, д.15</p>
				</div>
			</div>
		</div>
	</footer>

	<div class="login-modal">
		<div class="modal__content">
			<h2>Мой кабинет</h2>
			<div class="modal-close">
				<button class="m-close">
					<div class="first"></div>
					<div class="second"></div>
				</button>
			</div>
			<div class="modal__form">
				<form action="/views/authorization.php" method="POST">
					<p>Логин</p>
					<input class="text-input login" type="text" name="email" placeholder="Ваш логин" value=<?php print($userLogin);  ?>>

					<p>Пароль</p>
					<input class="text-input pass" type="password" name="password" placeholder="Ваш пароль">

					<button class="btn" value="Войти">Войти</button>

					<a href="#">Забыли пароль?</a>
					<button class="reg-btn">Регистрация</button>
				</form>
			</div>
		</div>
	</div>

	<div class="reg-modal">
		<div class="reg-modal__content">
			<div class="reg-modal-close">
				<button class="reg-m__close">
					<div class="first"></div>
					<div class="second"></div>
				</button>
			</div>

			<div class="reg-modal__form ">
				<form action="/views/registration.php" method="POST">
					<p>Ваше имя</p>
					<input type="text" name="first_name" placeholder="Имя">

					<p>Ваша Фамилия</p>
					<input type="text" name="last_name" placeholder="Фамилия">

					<p>E-mail</p>
					<input type="text" name="email" placeholder="E-mail">

					<p>Придумайте пароль</p>
					<input type="password" name="password" placeholder="Пароль">

					<p>Повторите пароль</p>
					<input type="password" name="repeat_password" placeholder="Повтор пароля">

					<button class="btn">Регистрация</button>
				</form>
			</div>
		</div>
	</div>

	<script src="js/swiper.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/modal.js"></script>

</body>

</html>