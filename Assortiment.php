<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ReadOnline - Читай в удовольствие!</title>
	<link rel="stylesheet" type="text/css" href="StyleCss/style.css">
</head>
<body>

<header class="header">
	<div class="container">
		<div class="header_inner">
			<a href="index.php" class="header_logo">ReadOnline</a>
			<nav class="nav">
			<?php
			if($_COOKIE['user'] == ''):
			?>
				<a class="nav_link" href="reg.php">Регистрация</a>
				<a class="nav_link" href="Auth.php">Войти</a>
			<?php else: ?>
			<a class="nav_link" href="PersonalAcc.php">Привет,<?=$_COOKIE['user']?></a>
			<?php endif; ?>
			</nav>
		</div>
	</div>
</header>

<div class="GenreList" style="display: flex; justify-content: space-around; margin-bottom: 7.5%;">
	<div class="genre">
		<div class="card">	
			<a href="bookGenre/Business_Books.php" class="list">Бизнес-книги</a>
			<img src="img/biznes.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">	
			<a href="bookGenre/Classical_literature.php" class="list">Классическая литератуа</a>
			<img src="img/voinaimir.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">	
			<a href="bookGenre/foreign_literature.php" class="list">Зарубежная литература</a>
			<img src="img/zarubezhnoe.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">	
			<a href="bookGenre/Russian_literature.php" class="list">Русская литература</a>
			<img src="img/russkoe.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">	
			<a href="bookGenre/Psihology.php" class="list">Книги по психологии</a>
			<img src="img/psihologiya.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">	
			<a href="bookGenre/Detektivi.php" class="list">Детективы</a>
			<img src="img/detektivi.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/lubovnie.php" class="list">Любовные романы</a>
			<img src="img/lubovnie.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/fantastica.php" class="list">Фантастика</a>
			<img src="img/fantastica.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/boeviki.php" class="list">Остросюжетная литература</a>
			<img src="img/boeviki.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/hobbi.php" class="list">Хобби, досуг</a>
			<img src="img/hobbi.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/sport.php" class="list">Спорт / фитнес</a>
			<img src="img/sport.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/nauchnaya.php" class="list">Учебная и научная литература</a>
			<img src="img/nauchnaya.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/kulinaruya.php" class="list">Кулинария</a>
			<img src="img/kulinariya.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/umor.php" class="list">Юмористическая литература</a>
			<img src="img/umor.jpg" class="cover">
		</div>
	</div>
	<div class="genre">
		<div class="card">
			<a href="bookGenre/Children's_literature.php" class="list">Детские книги</a>
			<img src="img/maugli.jpg" class="cover">
		</div>
	</div>
</div>

<footer class="footer">
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