<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') //проверка на асинхронность
	{
    if (isset($_POST["name"]) && isset($_POST["email"])) 
	{ 
    if ($_POST['name'] == '') 
    {
        echo 'Не заполнено поле Имя';
        return; //проверяем наличие обязательных полей
    }
    if ($_POST['email'] == '') 
    {
        echo 'Не заполнено поле E-mail';
        return;
    } 
    $name = $_POST['name'];
    $email = $_POST['email'];
	$text = $_POST['text'];

mail("email1@yandex.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email." "Тукст:".$text ," From: email2@yandex.ru \r\n"); //здесь делаем отправку заявки на почту. не забудьте поменять оба адреса
        echo 'Заявка отправлена!';
    	return; //возвращаем сообщение пользователю
    }
    }
?>