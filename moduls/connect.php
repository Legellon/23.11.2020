<?php
$host='localhost'; // Название сервера с базой данных
$name='root'; // Имя пользователя
$psswd=''; // пароль
$link=mysqli_connect($host,$name,$psswd); // подключение к серверу
mysqli_select_db($link, '23.11.2020'); // Выбор на сервере базы данных
mysqli_query($link, "SET NAMES utf8"); // Кодировка общения UTF8
?>
