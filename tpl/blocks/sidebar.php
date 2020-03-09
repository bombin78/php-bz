<div class="sidebar">
	<?php displaySidebar($pageId, $breadcrambItems, $linkParam); ?>
	<div class="sidebar__info">
		<div class="sidebar__info-recuperator recuperator">
			<a class="recuperator__link" href="http://rekuperator.ru/" title="Пластинчатые рекуператоры БушевецТермо - Производство пластинчатых теплообменников газов. Рекуператоры нового поколения">
				Открыт новый сайт!<br>
				Производство рекуператоров
			</a>
		</div>
		<div class="sidebar__info-memder member">
			<a class="member__link" href="http://www.pushkin-town.net/" target="_blank">
				<img class="member__img" src="/images/layout/memberc.jpg">
			</a>
		</div>
	</div>
</div>

<?php

// Вспомогательная функция настройки конфигурационного файла: определение
// значений флагов "isVisible" отвечающих за видимость "дочерних" меню
function changeVisibilityOfItemsMenu($pageId, &$menu) {

	foreach($menu as &$line) {

		if($line['id'] == $pageId) {
			$line['isVisible'] = true;
			return true;
		}

		if(is_array($line['items'])) {
	        if(changeVisibilityOfItemsMenu($pageId, $line['items'])){
				$line['isVisible'] = true;
				return true;
			}
	    }
	}
}

// Вспомогательная функция вывода блока для ссылки
function displayBlockLinks($menuItem, $linkParam) {

	$cssClassActive = ($menuItem['isVisible']) ? " _active" : "";
	$cssClassModifier = ' page-list__block-link--level'.$menuItem['level'];

	echo "<div class = 'page-list__block-link" . $cssClassModifier ."'>";
	echo "<a class='page-list__link" . $cssClassActive . "' href = '/" . $menuItem[$linkParam] . "'>";
	echo $menuItem['name'];
	echo "</a>";
	echo "</div>";
}

// Вспомогательная функция вывода бокового меню
function displayMenu($menu, $linkParam){

	echo "<ul class = 'sidebar__menu page-list'>";

	foreach($menu as $line) {

		echo "<li class = 'page-list__item'>";
		displayBlockLinks($line, $linkParam);
		if($line['isVisible'] && count($line['items']) > 0) {
			displayMenu($line['items'], $linkParam);
		}
		echo "</li>";
	}

	echo "</ul>";
}

// Функция, вывода боковой панели
function displaySidebar($pageId, $menuItems, $linkParam){

	changeVisibilityOfItemsMenu($pageId, $menuItems);
	displayMenu($menuItems, $linkParam);
}
