<?php

function showSelectedMenuItems($itemId, &$menu) {

	foreach($menu as &$line) {

		if($line['id'] == $itemId) {
			$line['isVisible'] = true;
			return true;
		}

		if(is_array($line['items'])) {
	        if(showSelectedMenuItems($itemId, $line['items'])){
				$line['isVisible'] = true;
				return true;
			}
	    }
	}
}

// Функция, вывода бокового меню с подпунктами до двух уровней вложенности
function displaySidebar($path, $activeItem, $linkParam){

	$itemId = $_GET['page'];
	$menuLevel1Params = json_decode(file_get_contents($path.'/tpl/blocks/sidebar/sidebar.json'),true);
	$menuLevel1Length = count($menuLevel1Params);

	showSelectedMenuItems($itemId, $menuLevel1Params);

	echo "<div class='sidebar'>";
	echo "<ul class = 'sidebar__menu page-list'>";

	for ($i = 0; $i < $menuLevel1Length; $i++) {

		echo "<li class = 'page-list__item'>";
		displayBlockLinks($path, $menuLevel1Params[$i], $activeItem, $linkParam);

		$menuLevel1IsVisible = $menuLevel1Params[$i]['isVisible'];
		$menuLevel2Params = $menuLevel1Params[$i]['items'];
		$menuLevel2Length = count($menuLevel2Params);

		if($menuLevel1IsVisible && $menuLevel2Length > 0) {

			echo "<ul class = 'sidebar__menu page-list'>";
			for ($j = 0; $j < $menuLevel2Length; $j++) {

				echo "<li class = 'page-list__item'>";
				displayBlockLinks($path, $menuLevel2Params[$j], $activeItem, $linkParam);

				$menuLevel2IsVisible = $menuLevel2Params[$j]['isVisible'];
				$menuLevel3Params = $menuLevel2Params[$j]['items'];
				$menuLevel3Length = count($menuLevel3Params);

				if($menuLevel2IsVisible && $menuLevel3Length > 0) {

					echo "<ul class = 'sidebar__menu page-list'>";
					for ($k = 0; $k < $menuLevel3Length; $k++) {
						echo "<li class = 'page-list__item'>";
						displayBlockLinks($path, $menuLevel3Params[$k], $activeItem, $linkParam);
						echo "</li>";
					}
					echo "</ul>";
				}
				echo "</li>";
			}
			echo "</ul>";
		}
		echo "</li>";
	}
	echo "</ul>";
	echo "</div>";
}

// Вспомогательная функция вывода блока для ссылки
function displayBlockLinks($path, $menuItem, $activeItem, $linkParam) {

	$cssClassActive = ($menuItem['id'] == $activeItem) ? " _active" : "";

	echo "<div class = 'page-list__block-link'>";
	echo "<a class='page-list__link" . $cssClassActive . "' href = '/" . $menuItem[$linkParam] . "'>";
	echo $menuItem['name'];
	echo "</a>";
	echo "</div>";
}

displaySidebar($path, $activeItem, $linkParam);
