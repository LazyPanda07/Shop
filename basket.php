<?php

session_start();

$userLogin = "";
$userId = $_SESSION["user_id"];

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

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
					<button class="nav-btn basket-btn"><img src="img/svg/market.svg" alt=""></button>
					<button class="nav-btn user-btn"><img src="img/svg/user.svg" alt=""></button>
				</div>
			</div>
		</nav>
	</header>

	<main class="container">
		<div class="basket row justify-content-between">
			<div class="col-md-9">
			</div>

			<div class="basket__side-bar col-md-3">
				<div class="basket__price">
					<h3 class="basket__price-title">Товары(1)</h3>
					<div class="basket__sum">
						<h3>Всего(р)</h3>
						<span>322</span>
					</div>
				</div>
				<form class="basket__form justify-content-center" action="">
					<label for="name">Ваше имя</label>
					<input type="text" id="name" placeholder="Имя">

					<label for="num">Номер телефона</label>
					<input type="text" id="num" placeholder="Номер">


					<label for="addr">Адрес доставки</label>
					<input type="text" id="addr" placeholder="Адрес">


					<select>
						<option>Доставка курьером</option>
						<option>Самовывоз</option>
					</select>
					<p>Оплата осуществлятся наличными при получении заказа</p>

					<button>Заказать</button>
				</form>
			</div>
		</div>

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

	<script>
		$.ajax({
			url: "/views/get_basket.php",
			method: "POST",
			dataType: "json",
			async: false,
			success: function(data) {
				const json = JSON.parse(JSON.stringify(data));

				for (const i in json) {
					const valueToInsert = String.raw `<div class="basket__card-wrapper">
						<div class="basket__card-title">
							<h3>${json[i]["name"]}(${json[i]["count"]})</h3>
							<form action="/views/delete_from_basket.php" method="POST">
							<input type="hidden" name="id" value="${json[i]["id"]}">
							<button class="basket__btn-del">Удалить</button>
							</form>
						</div>

						<div class="basket__card-price">
							<p>${json[i]["price"] * json[i]["count"]}</p>
						</div>
					</div>`;

					const basketCard = String.raw `<div class="basket__card">
					<div class="basket__img">
						<img src="${json[i]["image_source_path"]}" alt="">
					</div>
					${valueToInsert}
				</div>`;

					$(".col-md-9").append(basketCard);
				}
			}
		});
	</script>

</body>

</html>