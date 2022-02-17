<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="StyleCss/style.css">
	<link rel="stylesheet" type="text/css" href="StyleCss/auth.css">
</head>
<body>

<header class="header">
	<div class="container">
		<div class="header_inner">
			<a href="index.php" class="header_logo">ReadOnline</a>
			<nav class="nav">
				<a class="nav_link" href="Assortiment.php">Просмотреть ассортимент</a>
				<a class="nav_link" href="auth.php">Войти</a>
			</nav>
		</div>
	</div>
</header>

<div class = "regForm">
  <main class = "regForm">
    <form action = "DataBase/check.php" method="post">
     <img src = "img/auth.png" alt="" width="76" height="84">
     <h1 class = "regFormInput">Регистрация</h1>
      <div class = "regFormInput">
        <label for = "floatingInput">Логин :</label>
        <input type = "text" class="text" id="login" name="login" placeholder="Введите логин">
      </div>
	<div class = "regFormInput">
		<label for = "floatingPassword">Имя :</label>
        <input type = "text" class="text" id="name" name="name" placeholder="Введите имя" >
    </div>
    <div class = "regFormInput">
      	<label for = "floatingPassword">Пароль :</label>
        <input type = "password" class="text"  id="pass" name="pass" placeholder="Введите пароль" >
    </div>
      <button class = "btn" type="submit">Регистрация</button>
   </form>
  </main>
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