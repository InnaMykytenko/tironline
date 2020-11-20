<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{
    $email = trim($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $tel = htmlspecialchars($_POST["tel"]);
    $error = '';

    if(!$name)
    {
        $error .= 'Пожалуйста, введите ваше имя<br />';
    }

// Проверка телефона
    function ValidateTel($valueTel)
    {
        $regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
        if($valueTel == "") {
            return false;
        } else {
            $string = preg_replace($regexTel, "", $valueTel);
        }
        return empty($string) ? true : false;
    }
    if(!$error)
// (length)
        if(!$message || strlen($message) < 1)
        {
            $error .= "Введите свое сообщение<br />";
        }
    if(!$error)
    {

        $name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

        $subject ="Новое сообщение с веб-сайта tironline.com.ua";
        $subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
        /*
        $message ="\n\nСообщение: ".$message."\n\nИмя: " .$name."\n\nТелефон: ".$tel."\n\n для коментария тоже!!!";
        */
        $message1 ="\n\nИмя: ".$name."\n\nТелефон: " .$tel."\n\nСообщение: ".$message."\n\n";

        $header = "Content-Type: text/plain; charset=utf-8\n";

        $header .= "From: Новые сообщение <info.atlas24@gmail.com>\n\n";
        $mail = mail("info.atlas24@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

        if($mail)
        {
            echo 'OK';
        }

    }
    else
    {
        echo '<div class="notification_error">'.$error.'</div>';
    }

}
?>