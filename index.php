<?php
$inputMail = $_POST['email'];
$name = $_POST['name'];
$page = $_POST['page'];

$to = 'rafael_guliev94@list.ru';
$subject = 'Подписка от клиента';
$message = "<p>Клиент: $inputMail</p> <p>Имя: $name</p>  <p>Страница: $page</p> ";
$headers = "Content-type:text/html; charset = utf-8 \r\n";
$headers .= "From: exampleour@gmail.com";

mail($to, $subject, $message, $headers);

?>