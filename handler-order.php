<?php
	$phone      = trim($_POST['phone']);
	$timeZone   = trim($_POST['timezone']);
	$msg_box = 'Сообщение не отправлено.<br>Необходимо заполнить номер телефона.';

	if($phone != ''){

		$to = "bushevec2009@yandex.ru";
		$title = "Вам заявка с сайта";
		$post = "<p align='left'>Здравствуйте!<br>Мне нужна консультация<br> Тел: ".$phone ."<br> Часовой пояс: ".$timeZone."</p>";

		$header="Content-Type:text/html;charset=UTF-8";
		mail($to,$title,$post,$header);

		$msg_box = 'Спасибо за обращение!<br>Наш специалист свяжется с Вами.';
	}

    echo $msg_box;
