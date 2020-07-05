<?php
//Режим работы сайта: TRUE - for development, FALSE - for production
$dev = TRUE;

if($dev){
	$linkParam = 'url';
	$siteMapLink = 'index.php?page=12';
	$contactsLink = 'index.php?page=10';
} else {
	$linkParam = 'alias';
	$siteMapLink = '/map/';
	$contactsLink = '/contact/';
}

if (isset ($_GET['page'])) $pageId = $_GET['page'];
else $pageId = 1;

$path = "./";
$validList = [];
$menuItems = [];
$breadcrambItems = [];

// Подключение файлов с данными
$commonParams = json_decode(file_get_contents($path.'/config/data/common.json'),true);
$routesParams  = json_decode(file_get_contents($path.'/config/data/items.json'),true);
$connectParams = json_decode(file_get_contents($path.'/config/data/pages.json'),true);

$validList = getValidList($routesParams, $routesParams[0], $pageId);

setMenuItems($validList, $menuItems);
setBreadcrambItems($validList, $breadcrambItems, $pageId);

function getValidList($list, $rootItem, $pageId) {

	$validList = [];
	$breadcrambs = [];
	array_push($breadcrambs, [
		'url' => $rootItem['url'],
		'name' => $rootItem['name'],
		'alias' => $rootItem['alias'],
	]);

	setValidList($rootItem['id'], $pageId, $list, $validList, $breadcrambs);
	return $validList;
}

function setValidList($rootItemId, $pageId, $list, &$validList, $breadcrambs) {

	foreach($list as $line) {

		if($rootItemId !== $line['id']){

			$newItem = $line;
			$newItem['isVisible'] = false;
			$newItem['breadcrambs'] = $breadcrambs;

			array_push($newItem['breadcrambs'], [
				'url' => $line['url'],
				'name' => $line['name'],
				'alias' => $line['alias'],
			]);

			if(is_array($line['items']) ) {
				$newItem['items'] = [];
				setValidList($rootItemId, $pageId, $line['items'], $newItem['items'], $newItem['breadcrambs']);
			}
			array_push($validList, $newItem);
		}
	}
}

function setMenuItems($validList, &$menuItems) {

	foreach($validList as $line) {

		if($line['isMenu']) {

			$newItem = $line;

			if (is_array($line['items'])) {
				$newItem['items'] = [];
				setMenuItems($line['items'], $newItem['items']);
			}
			array_push($menuItems, $newItem);
		}
	}
}

function setBreadcrambItems($validList, &$breadcrambItems, $pageId) {

	foreach($validList as $line) {

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
