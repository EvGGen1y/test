<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="StyleCss/style.css">
	<link rel="stylesheet" type="text/css" href="StyleCss/auth.css">
	<link rel="stylesheet" type="text/css" href="StyleCss/buy.css">
</head>
<body>

<header class="header">
	<div class="container">
		<div class="header_inner">
			<a href="index.php" class="header_logo">ReadOnline</a>
			<nav class="nav">
        <a class="nav_link" href="Database/exit.php">Написать тех. поддержке</a>
				<a class="nav_link" href="Database/exit.php">Выход</a>
			</nav>
		</div>
	</div>
</header>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="sup.php" method="post">
        <div class="row">
          <div class="col-50">
            <h3>Написать тех. поддержке</h3>
            <input type="email" name="email" placeholder="Введите email" class="form-control" style="width:400px"><br><br>

            <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"  style="width:400px">
            </textarea><br>
            <button type="submit" name="send">Отправить</button>
        </div>
      </form>
    </div>
  </div>

<footer class = "footer">
	<div class = "container">
		<div class = "footer_inner">
			<nav class = "nav_footer">
				<a class = "nav_link" href="https://youtube.com">Youtube</a>
				<a class = "nav_link" href="https://vk.com">Vkontakte</a>
				<a class = "nav_link" href="https://instagram.com">Instagram</a>
			</nav>
		</div>
	</div>
</footer>

</body>
</html>