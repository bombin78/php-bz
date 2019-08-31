<?php
//-------- Подключение файла конфигурации ---------
include_once($path."config/config.php");
//-------------------------------------------------


//------ Блок подключения файлов к index.php ------
if (isset ($_GET['page'])) $page = $_GET['page'];
else $page = 1;

switch ($page) {

	// Страницы подключаемые через основное меню
	case "1":
		$connect = "tpl/pages/main/main.php";
		$activeItem = 1;
		$title = "Главная";
		break;

	case "2":
		$connect = "tpl/pages/recuperators/recuperators.php";
		$activeItem = 2;
		$title = "Рекуператор тепла";
		break;

	case "3":
		$connect = "tpl/pages/recuperators/recuperator-tepla-zakaz.php";
		$activeItem = 3;
		$title = "Рекуператор тепла";
		break;

	case "4":
		$connect = "tpl/pages/recuperators/recuperator-industry-5.php";
		$activeItem = 4;
		$title = "Рекуператоры нового поколения";
		break;

	case "5":
		$connect = "tpl/pages/recuperators/news.php";
		$activeItem = 5;
		$title = "";
		break;

	case "6":
		$connect = "tpl/pages/recuperators/form.php";
		$activeItem = 6;
		$title = "";
		break;

	case "7":
		$connect = "tpl/pages/capital-remont/capital-remont.php";
		$activeItem = 7;
		$title = "";
		break;

	case "8":
		$connect = "tpl/pages/capital-remont/vibro-immersers.php";
		$activeItem = 8;
		$title = "";
		break;

	case "9":
		$connect = "tpl/pages/capital-remont/drezin.php";
		$activeItem = 9;
		$title = "";
		break;

	case "10":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base.php";
		$activeItem = 10;
		$title = "";
		break;

	case "11":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK-base-DGKU.php";
		$activeItem = 11;
		$title = "";
		break;

	case "12":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK3-rail.php";
		$activeItem = 12;
		$title = "";
		break;

	case "13":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/MPT-VK-5.php";
		$activeItem = 13;
		$title = "";
		break;

	case "14":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/ADM-1.5B.php";
		$activeItem = 14;
		$title = "";
		break;

	case "15":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK-4M-rail.php";
		$activeItem = 15;
		$title = "";
		break;

	case "16":
		$connect = "tpl/pages/spare-parts.php";
		$activeItem = 16;
		$title = "";
		break;

	case "17":
		$connect = "tpl/pages/navesnoe-oborudovanie/navesnoe-oborudovanie.php";
		$activeItem = 17;
		$title = "";
		break;

	case "18":
		$connect = "tpl/pages/navesnoe-oborudovanie/burovoe-oborudovanie.php";
		$activeItem = 18;
		$title = "";
		break;

	case "19":
		$connect = "tpl/pages/navesnoe-oborudovanie/fundamend.php";
		$activeItem = 19;
		$title = "";
		break;

	case "20":
		$connect = "tpl/pages/navesnoe-oborudovanie/vint.php";
		$activeItem = 20;
		$title = "";
		break;

	case "21":
		$connect = "tpl/pages/manufacturing/manufacturing.php";
		$activeItem = 21;
		$title = "";
		break;

	case "22":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli.php";
		$activeItem = 22;
		$title = "";
		break;

	case "23":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/VK-3-rail.php";
		$activeItem = 23;
		$title = "";
		break;

	case "24":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/MPT-VK-5.php";
		$activeItem = 24;
		$title = "";
		break;

	case "25":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/VK-4-rail.php";
		$activeItem = 25;
		$title = "";
		break;

	case "26":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/ADM-1.5B.php";
		$activeItem = 26;
		$title = "";
		break;

	case "27":
		$connect = "tpl/pages/manufacturing/vibro-immersers.php";
		$activeItem = 27;
		$title = "";
		break;

	case "28":
		$connect = "tpl/pages/buying-used-eqipment/buying-used-eqipment.php";
		$activeItem = 28;
		$title = "";
		break;

	case "29":
		$connect = "tpl/pages/buying-used-eqipment/fitting-platforms.php";
		$activeItem = 29;
		$title = "";
		break;

	case "30":
		$connect = "tpl/pages/buying-used-eqipment/drezins.php";
		$activeItem = 30;
		$title = "";
		break;

	case "31":
		$connect = "tpl/pages/buying-used-eqipment/kotlovanokopateli.php";
		$activeItem = 31;
		$title = "";
		break;

	case "32":
		$connect = "tpl/pages/material/material.php";
		$activeItem = 32;
		$title = "";
		break;

	case "33":
		$connect = "tpl/pages/material/drezina.php";
		$activeItem = 33;
		$title = "";
		break;

	case "34":
		$connect = "tpl/pages/material/avtomatrisa.php";
		$activeItem = 34;
		$title = "";
		break;

	case "35":
		$connect = "tpl/pages/material/motovoz.php";
		$activeItem = 35;
		$title = "";
		break;

	case "36":
		$connect = "tpl/pages/material/vibropogruzhatel.php";
		$activeItem = 36;
		$title = "";
		break;

	case "37":
		$connect = "tpl/pages/material/vibropogruzhatel/princip.php";
		$activeItem = 37;
		$title = "";
		break;

	case "38":
		$connect = "tpl/pages/material/vibropogruzhatel/tehn-haracter.php";
		$activeItem = 38;
		$title = "";
		break;

	case "39":
		$connect = "tpl/pages/news.php";
		$activeItem = 39;
		$title = "";
		break;

	case "40":
		$connect = "tpl/pages/contact.php";
		$activeItem = 40;
		$title = "";
		break;

	case "41":
		$connect = "tpl/pages/video.php";
		$activeItem = 41;
		$title = "";
		break;

	case "404":
		$connect = "tpl/pages/error-404.php";
		$title = "Ошибка 404";
		break;

	default:
		$connect = "tpl/pages/main.php";
		$activeItem = 1;
		$title = "Главная";
		break;
}
//-------------------------------------------------
