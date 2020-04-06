 <?php
$to = "sapf-love@yandex.ru"; // емайл получателя данных из формы
$theme = "Заказ хлеба через сайт"; // тема полученного емайла
$message = "Моё имя: ".$_POST['first_name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "Мой E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Мой номер телефона: ".$_POST['telephone']."<br>"; //полученное из формы name=phone
$message .= "Заказ: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $theme, $message, $headers); //отправляет получателю на емайл значения переменных
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Спасибо за ваш заказ</title>
</head>
<body>
	<h1>Я обязательно свяжусь с Вами в ближайшее время!</h1>
	<p>Пожалуйста не закрывайте страницу, через несколько секунд мы переведем вас обратно на сайт!</p>
</body>
</html>

<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://lovebread.local/index.html");}
window.setTimeout("changeurl();",2000);
</script>