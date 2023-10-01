<?php
$user_name = htmlspecialchars($_POST["username"]); // От злых людей)
$user_phone = htmlspecialchars($_POST["userphone"]);


$token = "6159473022:AAFXPFAkCOU8v7zBBONWrDSUTgS6WUj3_8k";
$chat_id = "-4060615265";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);


foreach($formData as $key => $value) {
  $text .= $key . "<b>" .  urlencode($value) . "</b>" . "%0A"; // urlencode - чтобы плюсик было видно
}


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r"); // parse_mode - нужен для тегов

if ($sendToTelegram) { // Вспомогательное условие
  echo "Success";
} else {
  echo "Error";
}
