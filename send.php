<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$phone = $_POST['name'];}
if (isset($_POST['phone'])) {$name = $_POST['phone'];}
if (isset($_POST['text'])) {$text = $_POST['text'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "leralera630@gmail.com"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "\nТелефон: $phone\nИмя: $name\nСообщение: $text";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ обратного звонка'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/phone.css" />
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 2000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<div class="popup popup-order" id="popup_order">
      <div class="popup__wrapper">
        <div class="popup__inner">
          <div class="popup__content">
            <a onclick="PopUpHide()" class="btn-close popup-close">&#x2715</a>
            <h2 class="page-title popup__title">Спасибо! Мы свяжемся с вами!</h2>
            
          </div>
        </div>
      </div>
    </div>
</body>
</html>