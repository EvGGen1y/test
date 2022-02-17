<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ReadOnline - Читай в удовольствие!</title>
	<link rel="stylesheet" type="text/css" href="../StyleCss/style.css">
</head>
<body>

<header class="header">
	<div class="container">
		<div class="header_inner">
			<a href="../index.php" class="header_logo">ReadOnline</a>
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