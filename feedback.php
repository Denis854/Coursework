<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    if($name == '' || $email == '' || message == ''){
        echo 'Заполните все поля';
        exit;
    }
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    if(mail("test@mail.ru", $subject, $message, $headers))
        echo "Сообщение отправлен";
    else
        echo "Сообщение не отпрвлено";
?>