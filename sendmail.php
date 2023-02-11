
<html>
<head>
  <title>Форма обратной связи</title>
</head>
<body>
  <form method="post">
Инпут 1: <input type="text" name="input1" placeholder="Инпут 1">
Инпут 2: <input type="text" name="input2" placeholder="Инпут 2">
Инпут 3: <input type="text" name="input3" placeholder="Инпут 3">
Инпут 4: <input type="text" name="input4" placeholder="Инпут 4">
Инпут 5: <input type="text" name="input5" placeholder="Инпут 5">
<input type="submit" value="отправить">
</form>
</body>
</html>



<?php
// несколько получателей
$to  = 'cfifredko2@gmail.com' . ', ';  // обратите внимание на запятую
$to .= 'wez@example.com';

// тема письма
$subject = 'Письмо с моего сайта';

// текст письма меняется он!!
$message = $_POST['UserFirstName'] . '<br />' . $_POST['UserLastName'] . '<br />' 
. $_POST['Telephone'] . '<br />' . $_POST['Age'];

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Alex <cfifredko2@gmail.com>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['UserFirstName'] . '<' . $_POST['UserLastName'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>