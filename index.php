<html>
<head>
<meta charset="utf-8">
    <title>Главная</title>  
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="shapka1">
  <center> <table height="auto" class="shapka3"><tr><td>
  <img src="gruming1.svg" width="150" height="150">
</td><td>
<h1 class="text1">  Груминг-студия "Веселый пёс"<br> ИС-18 Сарновский Даниил</h1>
<form class="regis" action="signin.php" method="post">
<label>Логин</lable>
<input name="login" type="text" placeholder="Введите логин">
<label>Пароль</lable>
<input name="password" type="password" placeholder="Введите пароль">
<button type="submit">Войти</button>
<p>Впервые у нас?<a class="urll" href="reg.php"> Зарегистрируйтесь!</a></p>
<?php
 if(isset($_SESSION['message'])){
     echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
 }
 unset($_SESSION['message']);
    ?>
</form>
</td></tr></table></center>
    </div class="shapka1">
    <table class="content1"><tr><td>
    </table>

<br>
  <div class="inf1" >  
  <a class="zagolovok">Наши услуги:</a><br>
  <center>
  <div class="inf" >
  <a class="info">  
 <p class="inff"> <pre>
<div class="textc"> ПРИУЧЕНИЕ ЩЕНКА К ГРУМИНГУ </div>

<img src="dog.jpg" width="200" height="200">

    от 2250 р.
</pre></p></div>
<div class="inf" >
<p class="inff"> <pre>
<div class="textc"> МЫТЬЕ + КУГ </div>

<img src="dog2.jpg" width="200" height="200">

    от 3150 р.
</pre></p></div>
<div class="inf" >
<p class="inff"> <pre>
<div class="textc"> Стрижка </div>

<img src="dog.jpg" width="200" height="200">

    от 2250 р.
</pre></p></div>

<div class="inf" >
<p class="inff"> <pre>
<div class="textc"> Уход </div>

<img src="dog.jpg" width="200" height="200">

    от 2250 р.
</pre></p></div>



</body>
</html>