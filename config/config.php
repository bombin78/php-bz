<?php
//Режим работы сайта: TRUE - for development, FALSE - for production
$dev = TRUE;

if($dev){
	$linkParam = 'url';
	$siteMapLink = '/';
	$contactsLink = 'index.php?page=9';
} else {
	$linkParam = 'alias';
	$siteMapLink = '/';
	$contactsLink = 'contact/';
}

if (isset ($_GET['page'])) $pageId = $_GET['page'];
else $pageId = 1;

$path = "./";
$menuItems = [];
$breadcrambItems = [];

// Подключение файлов с данными
$commonParams = json_decode(file_get_contents($path.'/config/data/common.json'),true);
$routesParams  = json_decode(file_get_contents($path.'/config/data/items.json'),true);
$connectParams = json_decode(file_get_contents($path.'/config/data/pages.json'),true);

$menuItems = getNewList($routesParams, $routesParams[0], $pageId);
setBreadcrambItems($menuItems, $breadcrambItems, $pageId);

function getNewList($list, $rootItem, $pageId) {

	$newList = [];
	$breadcrambs = [];
	array_push($breadcrambs, [
		'url' => $rootItem['url'],
		'name' => $rootItem['name'],
		'alias' => $rootItem['alias'],
	]);

	setNewList($rootItem['id'], $pageId, $list, $newList, $breadcrambs);
	return $newList;
}

function setNewList($rootItemId, $pageId, $list, &$newList, $breadcrambs) {

	foreach($list as $line) {

		if($rootItemId !== $line['id']){

			$newItem = $line;
			$newItem['breadcrambs'] = $breadcrambs;
			array_push($newItem['breadcrambs'], [
				'url' => $line['url'],
				'name' => $line['name'],
				'alias' => $line['alias'],
			]);

			if(is_array($line['items']) ) {
				$newItem['items'] = [];
				setNewList($rootItemId, $pageId, $line['items'], $newItem['items'], $newItem['breadcrambs']);
			}
			array_push($newList, $newItem);
		}
	}
}

function setBreadcrambItems($menuItems, &$breadcrambItems, $pageId) {

	foreach($menuItems as $line) {

		if($line['id'] == $pageId) {
			$breadcrambItems = $line['breadcrambs'];
			break;
		}

		if (is_array($line['items'])) {
			setBreadcrambItems($line['items'], $breadcrambItems, $pageId);
		}
	}
}

// Блок переменных для подключения файлов к index.php
foreach($connectParams as $line) {

	if($line['id'] == $pageId) {
		$title = $line['title'];
		$keywords = $line['keywords'];
		$description = $line['description'];
		$phpFile = $line['phpFile'];
		$cssFile = $line['cssFile'];
		return;
	}
}
