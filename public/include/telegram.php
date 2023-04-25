<?php

/* https://api.telegram.org/bot6087052425:AAEp5ywYJE0n33in0N3IrO7CXkKr4DIjiL0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['your-name'];
$phone = $_POST['text-tel'];
$name = 'your-name';
$phone = 'text-tel';
$token = "6087052425:AAEp5ywYJE0n33in0N3IrO7CXkKr4DIjiL0";
$chat_id = "-833812569";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&parse_mode=html&text=".$txt;

$sendToTelegram = fopen($url,"+r");


if ($sendToTelegram) {

print_r($url);
print_r($sendToTelegram);
  //header('Location: /');
} else {
  echo "Error";
}
?>