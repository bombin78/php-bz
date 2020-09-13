<div class="bz-sidebar">
	<?php displaySidebar($pageId, $menuItems, $linkParam); ?>
	<div class="bz-sidebar__info">
		<div class="bz-sidebar__info-recuperator bz-recuperator">
			<a class="bz-recuperator__link" href="http://rekuperator.ru/" title="Пластинчатые рекуператоры БушевецТермо - Производство пластинчатых теплообменников газов. Рекуператоры нового поколения">
				Открыт новый сайт!<br>
				Производство рекуператоров
			</a>
		</div>
		<div class="bz-sidebar__info-memder bz-member">
			<a class="bz-member__link" href="http://www.pushkin-town.net/" target="_blank">
				<img class="bz-member__img" src="/images/layout/memberc.jpg">
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
	$cssClassModifier = ' bz-page-list__block-link--level'.$menuItem['level'];

	echo "<div class = 'bz-page-list__block-link" . $cssClassModifier ."'>";
	echo "<a class='bz-page-list__link" . $cssClassActive . "' href = '/" . $menuItem[$linkParam] . "'>";
	echo $menuItem['name'];
	echo "</a>";
	echo "</div>";
}

// Вспомогательная функция вывода бокового меню
function displayMenu($menuItems, $linkParam){

	echo "<ul class = 'bz-sidebar__menu bz-page-list'>";

	foreach($menuItems as $line) {

		echo "<li class = 'bz-page-list__item'>";
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
