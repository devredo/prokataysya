<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$to = "irynazeger@gmail.com";
$date = date("d.m.Y");
$time = date("h:i");
$from = $email;
$subject = "Заявка з сайту";


$msg = "
    Імя: $name /n
    Телефон: $phone /n
    Пошта: $email";
mail($to, $subject, $msg, "From: $from ");

?>

<p>Дякуємо, Ваш запит надіслано. Ми зв'яжемось з Вами найближчим часом.</p>