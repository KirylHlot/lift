<?php

$recepient = "kirillhlot@mail.ru";
$sitename = "Lift";

$email = trim($_POST["email"]);
$name = trim($_POST["name"]);

$message = "
<div xmlns=\"http://www.w3.org/1999/xhtml\">
	Заявка из формы 'Получите на почту адресную программу с ценами на рекламу в лифтах'
	<br>Email: $email
	<br>Имя: $name	
</div>";

$pagetitle = "Новая заявка с нашего сайта $sitename";
mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"UTF-8\";\n From: $recepient");