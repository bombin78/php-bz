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
		$title = "Бушевецкий завод";
		$description = "";
		$style = "main.css";
		break;

	case "2":
		$connect = "tpl/pages/recuperators/recuperators.php";
		$title = "Рекуператор тепла";
		$description = "";
		$style = "recuperators/recuperators.css";
		break;

	case "21":
		$connect = "tpl/pages/recuperators/recuperator-tepla-zakaz.php";
		$title = "Рекуператор тепла";
		$description = "";
		$style = "recuperators/recuperator-tepla-zakaz.css";
		break;

	case "22":
		$connect = "tpl/pages/recuperators/recuperator-industry-5.php";
		$title = "Рекуператоры нового поколения";
		$description = "";
		$style = "recuperators/recuperator-industry-5.css";
		break;

	case "23":
		$connect = "tpl/pages/recuperators/news.php";
		$title = "Новости";
		$description = "";
		$style = "recuperators/news.css";
		break;

	case "24":
		$connect = "tpl/pages/recuperators/form.php";
		$title = "Опросный лист на теплообменники";
		$description = "";
		$style = "recuperators/form.css";
		break;

	case "3":
		$connect = "tpl/pages/capital-remont/capital-remont.php";
		$title = "Капитальный ремонт";
		$description = "";
		$style = "capital-remont/capital-remont.css";
		break;

	case "31":
		$connect = "tpl/pages/capital-remont/vibro-immersers.php";
		$title = "Вибропогружатели";
		$description = "";
		$style = "capital-remont/vibro-immersers.css";
		break;

	case "32":
		$connect = "tpl/pages/capital-remont/drezin.php";
		$title = "Дрезины, автомотрисы, мотовозы";
		$description = "";
		$style = "capital-remont/drezin.css";
		break;

	case "33":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/cotlovanokopately-base.php";
		$title = "Котлованокопатели на любой базе";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/cotlovanokopately-base.css";
		break;

	case "331":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK-base-DGKU.php";
		$title = "ВК на базе дрезины ДГКУ";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/VK-base-DGKU.css";
		break;

	case "332":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK3-rail.php";
		$title = "ВК-3 на базе ЖД платформы";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/VK3-rail.css";
		break;

	case "333":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/MPT-VK-5.php";
		$title = "МПТ-ВК-5 на базе мотовоза МПТ-6";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/MPT-VK-5.css";
		break;

	case "334":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/ADM-1.5B.php";
		$title = "АДМ-1.5 Б исп. 6.1 на базе дрезины АДМ-1.3";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/ADM-1.5B.css";
		break;

	case "335":
		$connect = "tpl/pages/capital-remont/cotlovanokopately-base/VK-4M-rail.php";
		$title = "ВК-4М на базе ЖД платформы";
		$description = "";
		$style = "capital-remont/cotlovanokopately-base/VK-4M-rail.css";
		break;

	case "4":
		$connect = "tpl/pages/spare-parts.php";
		$title = "Запчасти к машинам ВК и АВФ";
		$description = "";
		$style = "spare-parts.css";
		break;

	case "41":
		$connect = "tpl/pages/navesnoe-oborudovanie/navesnoe-oborudovanie.php";
		$title = "Навесное оборудование для АВФ и МС";
		$description = "";
		$style = "navesnoe-oborudovanie/navesnoe-oborudovanie.css";
		break;

	case "42":
		$connect = "tpl/pages/navesnoe-oborudovanie/burovoe-oborudovanie.php";
		$title = "ТТН-057 для бурения лидирующих скважин";
		$description = "";
		$style = "navesnoe-oborudovanie/burovoe-oborudovanie.css";
		break;

	case "43":
		$connect = "tpl/pages/navesnoe-oborudovanie/fundamend.php";
		$title = "ТТН-059 по разрушению фундамента";
		$description = "";
		$style = "navesnoe-oborudovanie/fundamend.css";
		break;

	case "44":
		$connect = "tpl/pages/navesnoe-oborudovanie/vint.php";
		$title = "ТТН-064 для завинчивания винтовых металлических опор";
		$description = "";
		$style = "navesnoe-oborudovanie/vint.css";
		break;

	case "5":
		$connect = "tpl/pages/manufacturing/manufacturing.php";
		$title = "Изготовление новых машин";
		$description = "";
		$style = "manufacturing/manufacturing.css";
		break;

	case "51":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/kotlovanokopateli.php";
		$title = "Котлованокопатели";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/kotlovanokopateli.css";
		break;

	case "511":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/VK-3-rail.php";
		$title = "ВК-3 на базе ЖД платформы";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/VK-3-rail.css";
		break;

	case "512":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/MPT-VK-5.php";
		$title = "МПТ-ВК-5 на базе мотовоза МПТ-6";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/MPT-VK-5.css";
		break;

	case "513":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/VK-4-rail.php";
		$title = "ВК-4 на базе ЖД платформы";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/VK-4-rail.css";
		break;

	case "514":
		$connect = "tpl/pages/manufacturing/kotlovanokopateli/ADM-1.5B.php";
		$title = "АДМ-1.5 Б исп. 6.1 на базе дрезины АДМ-1.3";
		$description = "";
		$style = "manufacturing/kotlovanokopateli/ADM-1.5B.css";
		break;

	case "52":
		$connect = "tpl/pages/manufacturing/vibro-immersers.php";
		$title = "Вибропогружатели – АВФ-1";
		$description = "";
		$style = "manufacturing/vibro-immersers.css";
		break;

	case "6":
		$connect = "tpl/pages/buying-used-eqipment/buying-used-eqipment.php";
		$title = "Приобретение б/у техники";
		$description = "";
		$style = "buying-used-eqipment/buying-used-eqipment.css";
		break;

	case "61":
		$connect = "tpl/pages/buying-used-eqipment/fitting-platforms.php";
		$title = "Фитинговые платформы";
		$description = "";
		$style = "buying-used-eqipment/fitting-platforms.css";
		break;

	case "62":
		$connect = "tpl/pages/buying-used-eqipment/drezins.php";
		$title = "Дрезины ДГКУ, АДМ, МПТ";
		$description = "";
		$style = "buying-used-eqipment/drezins.css";
		break;

	case "63":
		$connect = "tpl/pages/buying-used-eqipment/kotlovanokopateli.php";
		$title = "Котлованокопатели и вибропогружатели";
		$description = "";
		$style = "buying-used-eqipment/kotlovanokopateli.css";
		break;

	case "7":
		$connect = "tpl/pages/material/material.php";
		$title = "Материалы";
		$description = "";
		$style = "material/material.css";
		break;

	case "71":
		$connect = "tpl/pages/material/drezina.php";
		$title = "Дрезина, ремонт дрезин";
		$description = "";
		$style = "material/drezina.css";
		break;

	case "72":
		$connect = "tpl/pages/material/avtomatrisa.php";
		$title = "Виды автоматрис и их назначение";
		$description = "";
		$style = "material/avtomatrisa.css";
		break;

	case "73":
		$connect = "tpl/pages/material/motovoz.php";
		$title = "Мотовоз, ремонт мотовоза";
		$description = "";
		$style = "material/motovoz.css";
		break;

	case "74":
		$connect = "tpl/pages/material/vibropogruzhatel/vibropogruzhatel.php";
		$title = "Вибропогружатель";
		$description = "";
		$style = "material/vibropogruzhatel/vibropogruzhatel.css";
		break;

	case "741":
		$connect = "tpl/pages/material/vibropogruzhatel/princip.php";
		$title = "Принцип действия вибропогружателя";
		$description = "";
		$style = "material/vibropogruzhatel/princip.css";
		break;

	case "742":
		$connect = "tpl/pages/material/vibropogruzhatel/tehn-haracter.php";
		$title = "Технические характеристики вибропогружателей";
		$description = "";
		$style = "material/vibropogruzhatel/tehn-haracter.css";
		break;

	case "8":
		$connect = "tpl/pages/news.php";
		$title = "Новости";
		$description = "";
		$style = "news.css";
		break;

	case "9":
		$connect = "tpl/pages/contact.php";
		$title = "Контактная информация";
		$description = "";
		$style = "contact.css";
		break;

	case "10":
		$connect = "tpl/pages/video.php";
		$title = "Видео";
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
		$title = "Главная";
		$description = "";
		$style = "main.css";
		break;
}
//-------------------------------------------------
