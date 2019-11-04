<?php
$inputMail = $_POST['email'];
$name = $_POST['name'];
$page = $_POST['page'];

$to = 'rafael_guliev94@list.ru';
//$to = 'scib.ru@myswitzerland.com';
$subject = 'Подписка от клиента';
$message = "<p>Клиент: $inputMail</p> <p>Имя: $name</p>  <p>Страница: $page</p> ";
$headers = "Content-type:text/html; charset = utf-8 \r\n";
$headers .= "From: exampleour@gmail.com";

mail($to, $subject, $message, $headers);

if (mail($to, $subject, $message, $headers)) {
    echo true;
} else {
    echo false;
}

?>