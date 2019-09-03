<?php

// Функция, вывода бокового меню с подпунктами до двух уровней вложенности
function displaySidebar($path, $activeItem, $linkParam){

	$menuLevel1Params = json_decode(file_get_contents($path.'/tpl/blocks/sidebar/sidebar.json'),true);
	$menuLevel1Length = count($menuLevel1Params);

	echo "<aside class='sidebar-container'>";
	echo "<div class='sidebar-container__block sidebar'>";
	echo "<h2 class = 'sidebar__title'>Разделы</h2>";
	echo "<ul class = 'sidebar__sidebar-menu sidebar-menu'>";

	for ($i = 0; $i < $menuLevel1Length; $i++) {

		echo "<li class = 'sidebar-menu__item'>";
		displayBlockLinks($path, $menuLevel1Params[$i], $activeItem, $linkParam);;

		if($menuLevel1Params[$i]['items']) {

			$menuLevel2Params = $menuLevel1Params[$i]['items'];
			$menuLevel2Length = count($menuLevel2Params);

			echo "<ul class = 'sidebar__sidebar-menu sidebar-menu'>";
			for ($j = 0; $j < $menuLevel2Length; $j++) {

				echo "<li class = 'sidebar-menu__item'>";
				displayBlockLinks($path, $menuLevel2Params[$j], $activeItem, $linkParam);

				if($menuLevel2Params[$j]['items']) {

					$menuLevel3Params = $menuLevel2Params[$j]['items'];
					$menuLevel3Length = count($menuLevel3Params);

					echo "<ul class = 'sidebar__sidebar-menu sidebar-menu'>";
					for ($k = 0; $k < $menuLevel3Length; $k++) {
						echo "<li class = 'sidebar-menu__item'>";
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
	echo "</aside>";
}

// Вспомогательная функция вывода блока для ссылки
function displayBlockLinks($path, $menuItem, $activeItem, $linkParam) {

	$cssClassActive = ($menuItem['id'] == $activeItem) ? " _active" : "";

	echo "<div class = 'sidebar-menu__block-link'>";
	echo "<a class='sidebar-menu__link" . $cssClassActive . "' href = '" . $path . $menuItem[$linkParam] . "'>";
	echo $menuItem['name'];
	echo "</a>";
	echo "</div>";
}

displaySidebar($path, $activeItem, $linkParam);
