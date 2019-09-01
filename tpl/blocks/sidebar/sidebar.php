<?php

// Функция, создающая боковое меню с подпунктами до двух уровней вложенности
function getSidebar($path, $activeItem, $linkParam){

	$menuLevel1Params = json_decode(file_get_contents($path.'/tpl/blocks/sidebar/sidebar.json'),true);
	$menuLevel1Length = count($menuLevel1Params);

	echo "<aside class='sidebar-container'>";
	echo "<div class='sidebar-container__block sidebar'>";
	echo "<h2 class = 'sidebar__title'>Разделы</h2>";
	echo "<ul class = 'sidebar__sidebar-menu sidebar-menu'>";

	for ($i = 0; $i < $menuLevel1Length; $i++) {

		$cssClassLevel1Active = ($menuLevel1Params[$i]['id'] == $activeItem) ? " _active" : "";

		echo "<li class = 'sidebar-menu__item'>";
		echo "<div class = 'sidebar-menu__block-link'>";
		echo "<a class='sidebar-menu__link" . $cssClassLevel1Active . "' href = '" . $path . $menuLevel1Params[$i][$linkParam] . "'>";
		echo $menuLevel1Params[$i]['name'];
		echo "</a>";
		echo "</div>";

		if($menuLevel1Params[$i]['items']) {

			$menuLevel2Params = $menuLevel1Params[$i]['items'];
			$menuLevel2Length = count($menuLevel2Params);

			echo "<ul class = 'sidebar__sidebar-menu sidebar-menu'>";
			for ($j = 0; $j < $menuLevel2Length; $j++) {

				$cssClassLevel2Active = ($menuLevel2Params[$j]['id'] == $activeItem) ? " _active" : "";

				echo "<li class = 'sidebar-menu__item'>";
				echo "<div class = 'sidebar-menu__block-link'>";
				echo "<a class='sidebar-menu__link" . $cssClassLevel2Active . "' href = '" . $path . $menuLevel2Params[$j][$linkParam] . "'>";
				echo $menuLevel2Params[$j]['name'];
				echo "</a>";
				echo "</div>";

				if($menuLevel2Params[$j]['items']) {

					$menuLevel3Params = $menuLevel2Params[$j]['items'];
					$menuLevel3Length = count($menuLevel3Params);

					echo "<ul class = 'sidebar__sidebar-menu sidebar-menu'>";
					for ($k = 0; $k < $menuLevel3Length; $k++) {

						$cssClassLevel3Active = ($menuLevel3Params[$k]['id'] == $activeItem) ? " _active" : "";

						echo "<li class = 'sidebar-menu__item'>";
						echo "<div class = 'sidebar-menu__block-link'>";
						echo "<a class='sidebar-menu__link" . $cssClassLevel3Active . "' href = '" . $path . $menuLevel3Params[$k][$linkParam] . "'>";
						echo $menuLevel3Params[$k]['name'];
						echo "</a>";
						echo "</div>";
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

getSidebar($path, $activeItem, $linkParam);
