<?php
$to = "heliogracie@mail.ru";
$from = "heliogracie@mail.ru";
$successPage = "index.html";

$name = $_POST['name'];
$subject = 'Заявка с сайта Gentle Dental';
$phoneNumber = $_POST['phoneNumber'];

$name = stripslashes($name);
$phoneNumber = stripslashes($phoneNumber);
$message = "Имя: $name <br /> Номер: $phoneNumber";
$headers = array
(
    'Content-Type: text/html; charset="UTF-8";',
    'From: ' . $from,
    'Reply-To: ' . $from,
    'Return-Path: ' . $from,
);

if (empty($phoneNumber) || empty($name)){
    print "Поля не должны быть пустыми.<br>Пожалуйста заполните все поля.";
}
else {
    mail($to, $subject, $message, implode("\r\n", $headers));
    header("Location: $successPage");
}
?>