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
		$connect = "tpl/pages/main.php";
		$activeItem = 1;
		$title = "Главная";
		$description = "";
		$style = "main.css";
		break;

	case "2":
		$connect = "tpl/recuperators/recuperators.php";
		$activeItem = 2;
		$title = "Рекуператор тепла";
		$description = "";
		$style = "recuperators/recuperators.css";
		break;

	case "3":
		$connect = "tpl/pages/recuperators/recuperator-tepla-zakaz.php";
		$activeItem = 3;
		$title = "Рекуператор тепла";
		$description = "";
		$style = "recuperators/recuperator-tepla-zakaz.css";
		break;

	case "4":
		$connect = "tpl/pages/recuperators/recuperator-industry-5.php";
		$activeItem = 4;
		$title = "Рекуператоры нового поколения";
		$description = "";
		$style = "recuperators/recuperator-industry-5.css";
		break;

	case "5":
		$connect = "tpl/pages/recuperators/news.php";
		$activeItem = 5;
		$title = "";
		$description = "";
		$style = "recuperators/news.css";
		break;

	case "6":
		$connect = "tpl/pages/recuperators/form.php";
		$activeItem = 6;
		$title = "";
		$description = "";
		$style = "recuperators/form.css";
		break;

	case "7":
		$connect = "tpl/pages/capital-remont/capital-remont.php";
		$activeItem = 7;
		$title = "";
		$description = "";
		$style = "capital-remont/capital-remont.css";
		break;

	case "8":
		$connect = "tpl/pages/capital-remont/vibro-immersers.php";
		$activeItem = 8;
		$title = "";
		$description = "";
		$style = "capital-remont/vibro-immersers.css";
		break;

	case "9":
		$connect = "tpl/pages/capital-remont/drezin.php";
		$activeItem = 9;
		$title = "";
		$description = "";
		$style = "capital-remont/drezin.css";
		break;

	case "10":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base.php";
		$activeItem = 10;
		$title = "";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base.css";
		break;

	case "11":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK-base-DGKU.php";
		$activeItem = 11;
		$title = "";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/VK-base-DGKU.css";
		break;

	case "12":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK3-rail.php";
		$activeItem = 12;
		$title = "";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/VK3-rail.css";
		break;

	case "13":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/MPT-VK-5.php";
		$activeItem = 13;
		$title = "";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/MPT-VK-5.css";
		break;

	case "14":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/ADM-1.5B.php";
		$activeItem = 14;
		$title = "";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/ADM-1.5B.css";
		break;

	case "15":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK-4M-rail.php";
		$activeItem = 15;
		$title = "";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/VK-4M-rail.css";
		break;

	case "16":
		$connect = "tpl/pages/spare-parts.php";
		$activeItem = 16;
		$title = "";
		$description = "";
		$style = "spare-parts.css";
		break;

	case "17":
		$connect = "tpl/pages/navesnoe-oborudovanie/navesnoe-oborudovanie.php";
		$activeItem = 17;
		$title = "";
		$description = "";
		$style = "navesnoe-oborudovanie/navesnoe-oborudovanie.css";
		break;

	case "18":
		$connect = "tpl/pages/navesnoe-oborudovanie/burovoe-oborudovanie.php";
		$activeItem = 18;
		$title = "";
		$description = "";
		$style = "navesnoe-oborudovanie/burovoe-oborudovanie.css";
		break;

	case "19":
		$connect = "tpl/pages/navesnoe-oborudovanie/fundamend.php";
		$activeItem = 19;
		$title = "";
		$description = "";
		$style = "navesnoe-oborudovanie/fundamend.css";
		break;

	case "20":
		$connect = "tpl/pages/navesnoe-oborudovanie/vint.php";
		$activeItem = 20;
		$title = "";
		$description = "";
		$style = "navesnoe-oborudovanie/vint.css";
		break;

	case "21":
		$connect = "tpl/pages/manufacturing/manufacturing.php";
		$activeItem = 21;
		$title = "";
		$description = "";
		$style = "manufacturing/manufacturing.css";
		break;

	case "22":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/kotlovanokopateli.php";
		$activeItem = 22;
		$title = "";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/kotlovanokopateli.css";
		break;

	case "23":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/VK-3-rail.php";
		$activeItem = 23;
		$title = "";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/VK-3-rail.css";
		break;

	case "24":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/MPT-VK-5.php";
		$activeItem = 24;
		$title = "";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/MPT-VK-5.css";
		break;

	case "25":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/VK-4-rail.php";
		$activeItem = 25;
		$title = "";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/VK-4-rail.css";
		break;

	case "26":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/ADM-1.5B.php";
		$activeItem = 26;
		$title = "";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/ADM-1.5B.css";
		break;

	case "27":
		$connect = "tpl/pages/manufacturing/vibro-immersers.php";
		$activeItem = 27;
		$title = "";
		$description = "";
		$style = "manufacturing/vibro-immersers.css";
		break;

	case "28":
		$connect = "tpl/pages/buying-used-eqipment/buying-used-eqipment.php";
		$activeItem = 28;
		$title = "";
		$description = "";
		$style = "buying-used-eqipment/buying-used-eqipment.css";
		break;

	case "29":
		$connect = "tpl/pages/buying-used-eqipment/fitting-platforms.php";
		$activeItem = 29;
		$title = "";
		$description = "";
		$style = "buying-used-eqipment/fitting-platforms.css";
		break;

	case "30":
		$connect = "tpl/pages/buying-used-eqipment/drezins.php";
		$activeItem = 30;
		$title = "";
		$description = "";
		$style = "buying-used-eqipment/drezins.css";
		break;

	case "31":
		$connect = "tpl/pages/buying-used-eqipment/kotlovanokopateli.php";
		$activeItem = 31;
		$title = "";
		$description = "";
		$style = "buying-used-eqipment/kotlovanokopateli.css";
		break;

	case "32":
		$connect = "tpl/pages/material/material.php";
		$activeItem = 32;
		$title = "";
		$description = "";
		$style = "material/material.css";
		break;

	case "33":
		$connect = "tpl/pages/material/drezina.php";
		$activeItem = 33;
		$title = "";
		$description = "";
		$style = "material/drezina.css";
		break;

	case "34":
		$connect = "tpl/pages/material/avtomatrisa.php";
		$activeItem = 34;
		$title = "";
		$description = "";
		$style = "material/avtomatrisa.css";
		break;

	case "35":
		$connect = "tpl/pages/material/motovoz.php";
		$activeItem = 35;
		$title = "";
		$description = "";
		$style = "material/motovoz.css";
		break;

	case "36":
		$connect = "tpl/pages/material/vibropogruzhatel.php";
		$activeItem = 36;
		$title = "";
		$description = "";
		$style = "material/vibropogruzhatel.css";
		break;

	case "37":
		$connect = "tpl/pages/material/vibropogruzhatel/princip.php";
		$activeItem = 37;
		$title = "";
		$description = "";
		$style = "material/vibropogruzhatel/princip.css";
		break;

	case "38":
		$connect = "tpl/pages/material/vibropogruzhatel/tehn-haracter.php";
		$activeItem = 38;
		$title = "";
		$description = "";
		$style = "material/vibropogruzhatel/tehn-haracter.css";
		break;

	case "39":
		$connect = "tpl/pages/news.php";
		$activeItem = 39;
		$title = "";
		$description = "";
		$style = "news.css";
		break;

	case "40":
		$connect = "tpl/pages/contact.php";
		$activeItem = 40;
		$title = "";
		$description = "";
		$style = "contact.css";
		break;

	case "41":
		$connect = "tpl/pages/video.php";
		$activeItem = 41;
		$title = "";
		$description = "";
		$style = "video.css";
		break;

	case "404":
		$connect = "tpl/pages/error-404.php";
		$title = "Ошибка 404";
		$description = "";
		$style = "error-404.css";
		break;

	default:
		$connect = "tpl/pages/main.php";
		$activeItem = 1;
		$title = "Главная";
		$description = "";
		$style = "main.css";
		break;
}
//-------------------------------------------------
