<?php



$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6214929027:AAEc7J1_zD-Ah42rNx_eiDzgxAEqMajixjU";
$chat_id = "+7e3gSqQrsM0yZDFi";
$arr = array(
  'Імя замовника: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Дякуємо, Ваш запит надіслано. Ми зв'яжемось з Вами найближчим часом.";
} else {
  echo "Error";
}
?>