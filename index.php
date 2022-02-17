<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ReadOnline - Читай в удовольствие!</title>
	<link rel="stylesheet" type="text/css" href="StyleCss/style.css">
	<link rel="stylesheet" type="text/css" href="StyleCss/slider.css">
	<link rel="stylesheet" type="text/css" href="StyleCss/ModalWindow.css">
	<script src="slider.js"></script>
</head>
<body>
<header>
	<div class="container">
		<div class="header_inner">
			<div class="header_logo">ReadOnline</div>
			<nav class="nav">
				<a class="nav_link" href="Assortiment.php">Просмотреть ассортимент</a>
			<?php
			if($_COOKIE['user'] == ''):
			?>
				<a class="nav_link" href="reg.php">Регистрация</a>
				<a class="nav_link" href="auth.php">Войти</a>
			<?php else: ?>
				<a class="nav_link" href="PersonalAcc.php">Привет,<?=$_COOKIE['user']?></a>
			<?php endif; ?>
			</nav>
		</div>
	</div>
</header>

<?php
if ($_COOKIE['user'] == ''):
?>
<div id="modal_open" class="my_modal">
  <div class="my_modal-dialog">
    <div class="my_modal-content">
      <div class="my_modal-header">
        <p class="my_modal-title">Вы не авторизованы!</p>
        <a href="#" title="Закрыть модальное окно" class="close">×</a>
      </div>
      <div class="my_modal-body">    
    	<h1>Извините, вы не авторизованы</h1>
      	<a class = "btn" href="reg.php">Регистрация</a>
		<a class = "btn" href="auth.php">Войти</a>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
<!--Модальное окно-->
<div id="modal_open" class="my_modal">
  <div class="my_modal-dialog">
    <div class="my_modal-content">
      <div class="my_modal-header">
        <p class="my_modal-title">Заголовок модального окна</p>
        <a href="#" title="Закрыть модальное окно" class="close">×</a>
      </div>
    </div>
  </div>
</div>
<?php endif; ?> 

<div class="mainContainer" style="margin-top:20vh">
	<img src="img/books1.png" style="width: 380px; height: 380px">
	<p style="width:500px; font-size: 22px;">Всем привет, вы находитесь на сайте ReadOnline. Здесь вы можете оформить подписку на наш сайт и читать книги по вашим желаниям и предпочтениям. Всем приятного чтения!</p>
</div>

<div class="secondBg" style="margin-bottom:20vh">
	<div class="slideshow-container" style="margin-top:10px">
    	<div class="mySlides fade">
   			<div class="numbertext">1/3</div>
   			<img src="img/1.jpg" alt="" class="imgSlide" style="width:100%;">
    	</div>

    	<div class="mySlides fade">
   			<div class="numbertext">2/3</div>
   			<img src="img/2.jpg" alt="" class="imgSlide" style="width:100%;">
    	</div>

    	<div class="mySlides fade">
   			<div class="numbertext">3/3</div>
   			<img src="img/3.jpg" alt="" class="imgSlide" style="width:100%;">
    	</div>
    	<a class="prev" onclick="plusSlides(-1)">&#10094</a>
    	<a class="next" onclick="plusSlides(1)">&#10095</a>
	</div>
	<div style="text-align: center;">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	</div>
</div>
<br>

<?php
if ($_COOKIE['user'] == ''):
?>
<h1 align="center" style="margin-bottom:25px">Тарифы</h1>
<div class="mainContainer">
	<div style="width: 200px">
    <h2>79 рублей</h2>
    <p>Подписка на все книги, читай без ограничений в течении месяца!</p>
    <a href="#modal_open" class="btn">Купить</a>
	</div>
	<div style="width: 200px">
    <h2>599 рублей</h2>
    <p>Вариант подписки для любителей много почитать. Подписка на все книги в течении целого года!</p>
	<a href="#modal_open" class="btn">Купить</a>
    </div>
</div>
<br>
<?php else: ?>
	<h1 align="center" style="margin-bottom:25px">Тарифы</h1>
<div class="mainContainer">
	<div style="width: 200px">
    <h2>79 рублей</h2>
    <p>Подписка на все книги, читай без ограничений в течении месяца!</p>
    <a href="PersonalAcc.php" class="btn">Купить</a>
	</div>
	<div style="width: 200px">
    <h2>599 рублей</h2>
    <p>Вариант подписки для любителей много почитать. Подписка на все книги в течении целого года!</p>
	<a href="PersonalAcc.php" class="btn">Купить</a>
    </div>
</div>
<br>
<?php endif; ?>
<footer>
	<div class="container">
		<div class="footer_inner">
			<nav class="nav_footer">
				<a class="nav_link" href="https://youtube.com">Youtube</a>
				<a class="nav_link" href="https://vk.com">Vkontakte</a>
				<a class="nav_link" href="https://instagram.com">Instagram</a>
			</nav>
		</div>
	</div>
</footer>

</body>
</html>