<?php
session_start();
?>
<html>
<head>
<title>Главная страница</title>
</head>
<body>
<h2>Главная страница</h2>
<form action="testreg.php" method="post">
<!--**** testreg.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку testreg.php методом "post" ***** -->
  <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->  
  <p>
    <label>Ваш пароль:<br></label>
    <input name="pass" type="pass" size="15" maxlength="15">
  </p>
<!--**** В поле для паролей (name="pass" type="pass") пользователь вводит свой пароль ***** -->  
<p>
<input type="submit" name="submit" value="Войти">
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
<!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href="reg.php">Зарегистрироваться</a> 
</p></form>
<br>
<?php
// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
// Если пусты, то мы не выводим ссылку
echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка доступна только зарегистрированным пользователям</a>";
}
else
   {
   // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br>";
   }
?>
</body>
</html>
