<?php
$path = "./";
$dev = TRUE;//TRUE - for development, FALSE - for production

if($dev){
	$linkParam = 'url';
	$siteMapLink = '/';
	$contactsLink = 'index.php?page=9';
} else {
	$linkParam = 'alias';
	$siteMapLink = '/';
	$contactsLink = 'contact/';
}

//Контакты
$nameCompany        = 'ООО "Бушевецкий завод"';
$contactPerson_1    = '';
$contactPerson_2    = '';
$index              = '';
$location           = '';
$numPhone_1         = 'Тел.: +7 (920) 194-84-13';//основной номер телефона
$numPhone_2         = false;//дополнительный номер телефона
$eMail              = 'bushevec2009@yandex.ru';
//$copyright          = '&copy; 2015 - 2019';
$companyDetails      = '';
