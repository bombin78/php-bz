<?php

$f1 = trim($_POST['f1']);
$f2_1 = trim($_POST['f2_1']);
$f2_2 = trim($_POST['f2_2']);
$f2_3 = trim($_POST['f2_3']);
$f2_4 = trim($_POST['f2_4']);
$f2_5 = trim($_POST['f2_5']);
$f2_6 = trim($_POST['f2_6']);
$f2_7 = trim($_POST['f2_7']);
$f2_8 = trim($_POST['f2_8']);
$f3_1 = trim($_POST['f3_1']);
$f3_2 = trim($_POST['f3_2']);
$f3_3 = trim($_POST['f3_3']);
$f3_4 = trim($_POST['f3_4']);
$f3_5 = trim($_POST['f3_5']);
$f3_6 = trim($_POST['f3_6']);
$f4 = trim($_POST['f4']);
$f5 = trim($_POST['f5']);
$f6 = trim($_POST['f6']);
$f7 = trim($_POST['f7']);
$f8 = trim($_POST['f8']);
$f9 = trim($_POST['f9']);
$f10 = trim($_POST['f10']);
$f11 = trim($_POST['f11']);
$f12 = trim($_POST['f12']);
$f13 = trim($_POST['f13']);
$f14 = trim($_POST['f14']);
$f15 = trim($_POST['f15']);
$f16 = trim($_POST['f16']);
$f17 = trim($_POST['f17']);
$f18 = trim($_POST['f18']);
$f19 = trim($_POST['f19']);

if( $f1 != '' && $f2_1 != '' && $f2_2 != '' && $f2_4 != '' && $f2_5 != '' && $f2_7 != '' && $f3_1 != '' &&
    $f3_2 != '' && $f3_4 != '' && $f3_5 != '' && $f5 != '' && $f6 != '' && $f7 != '' && $f10 != '' &&
    $f12 != '' && $f13 != '' && $f14 != '' && $f16 != '' && $f17 != '' && $f18 != '' && $f19 != ''){

    $subject = 'Опросный лист';
    $header = 'Content-type: text/html; charset="UTF-8"';
    $header.= 'From: Rekuperator.ru <Rekuperator.ru>';
    $header.= 'Subject: '.$subject;
    $header.= 'Content-type: text/html; charset="UTF-8"';

$msg = '1. Название и описание технологического процесса, в котором будет использован теплообменник: <b>'
.$f1.'</b><br>'.

'2. Теплоноситель<br>'.
'2.1. Греющая среда: <b>'
.$f2_1.'</b><br>'.

'2.2. Температура на входе: <b>'
.$f2_2.' °C</b><br>'.

'2.3. Температура на выходе: <b>'
.$f2_3.' °C</b><br>'.

'2.4. Расход на входе: <b>'
.$f2_4.' '.$_POST['f2_4_1'].'</b><br>'.

'2.5. Давление на входе: <b>'
.$f2_5.' '.$_POST['f2_5_1'].'</b><br>'.

'2.6. Допустимое аэродинамическое сопротивление: <b>'
.$f2_6.' '.$_POST['f2_6_1'].'</b><br>'.

'2.7. Компонентный состав дымового газа: <b>'
.$f2_7.'</b><br>'.

'2.8. Количество механических примесей, г/м³: <b>'
.$f2_8.'</b><br>'.

'3. Нагреваемая среда<br>'.
'3.1. Нагреваемая среда: <b>'
.$f3_1.'</b><br>'.

'3.2. Температура на входе: <b>'
.$f3_2.' °C</b><br>'.

'3.3. Температура на выходе: <b>'
.$f3_3.' °C</b><br>'.

'3.4. Расход на входе: <b>'
.$f3_4.' '.$_POST['f3_4_1'].'</b><br>'.

'3.5. Давление на входе: <b>'
.$f3_5.' '.$_POST['f3_5_1'].'</b><br>'.

'3.6. Допустимое аэродинамическое сопротивление: <b>'
.$f3_6.' '.$_POST['f3_6_1'].'</b><br>'.

'4. Место предполагаемой установки теплообменника (описание, эскизы с размерами, фото): <b>'
.$f4.'</b><br>'.

'5. Присоединительные размеры и сечения подводящих и отводящих магистралей: <b>'
.$f5.'</b><br>'.

'6. Есть ли ограничения по геометрическим размерам (ширине, глубине, высоте): <b>'
.$f6.'</b><br>'.

'7. Режим работы теплообменника: <b>'
.$f7.'</b><br>'.

'8. Направление движения сред: <b>'
.$f8.'</b><br>'.

'9. Использовались ли ранее в данном технологическом процессе теплообменники?: <b>'
.$f9.'</b><br>'.

'10. Откуда предполагается производить забор нагреваемой среды: <b>'
.$f10.'</b><br>'.

'11. Назначение нагретой среды, куда производится ее выброс: <b>'
.$f11.'</b><br>'.

'12. Требуется ли разработка и изготовление теплоизоляции (или она делается «по месту»)?: <b>'
.$f12.'</b><br>'.

'13. Количество  теплообменников: <b>'
.$f13.'</b><br>'.

'14. Необходимые сроки поставки: <b>'
.$f14.'</b><br>'.

'15. Источник информации, из которого узнали о теплообменниках типа ОПТ™: <b>'
.$f15.'</b><br>'.

'16. Название и реквизиты предприятия-заказчика: <b>'
.$f16.'</b><br>'.

'17. Ф.И.О. контактного лица: <b>'
.$f17.'</b><br>'.

'18. Телефон контактного лица: <b>'
.$f18.'</b><br>'.

'19. E-mail контактного лица: <b>'
.$f19.'</b>';

    mail("bushevec5@yandex.ru", $subject, $msg, $header);

    // оповещение заказчика
    $msgClient = 'Добрый день! Ваша заявка принята.
    Наши специалисты смоделируют конструкцию рекуператора, рассчитают срок его окупаемости и свяжутся с Вами в ближайшее время.
    <br>
    Ваша команда Бушевецкого завода';
    mail($f19, $subject, $msgClient, $header);
} else {
    echo 'Сообщение не отправлено.<br>Необходимо заполнить все обязательные поля.';
}
