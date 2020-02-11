<?php

echo $_GET['page'];

// Функция, вывода бокового меню с подпунктами до двух уровней вложенности
function displaySidebar($path, $activeItem, $linkParam){

	$menuLevel1Params = json_decode(file_get_contents($path.'/tpl/blocks/sidebar/sidebar.json'),true);
	$menuLevel1Length = count($menuLevel1Params);

	echo "<div class='sidebar'>";
	echo "<ul class = 'sidebar__menu page-list'>";

	for ($i = 0; $i < $menuLevel1Length; $i++) {

		echo "<li class = 'page-list__item'>";
		displayBlockLinks($path, $menuLevel1Params[$i], $activeItem, $linkParam);

		if($menuLevel1Params[$i]['items']) {

			$menuLevel2Params = $menuLevel1Params[$i]['items'];
			$menuLevel2Length = count($menuLevel2Params);

			echo "<ul class = 'sidebar__menu page-list page-list--hidden'>";
			for ($j = 0; $j < $menuLevel2Length; $j++) {

				echo "<li class = 'page-list__item'>";
				displayBlockLinks($path, $menuLevel2Params[$j], $activeItem, $linkParam);

				if($menuLevel2Params[$j]['items']) {

					$menuLevel3Params = $menuLevel2Params[$j]['items'];
					$menuLevel3Length = count($menuLevel3Params);

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
