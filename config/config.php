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

$menuItems = getNewList($routesParams, 'menu', $pageId);
$breadcrambItems = getNewList($routesParams, 'breadcrambs', $pageId);

function getNewList($list, $nameParam, $pageId) {

	$newList = [];
	setNewList($list, $newList, $nameParam, $pageId);
	return $newList;
}

function setNewList($list, &$newList, $nameParam, $pageId) {

	foreach($list as $line) {
		// array_push($...., [
		// 	'url' => $line['url'],
		// 	'name' => $line['name'],
		// 	'alias' => $line['alias'],
		// ]);

		if(in_array($nameParam, $line['used'], true)){

			$newItem = $line;

			if(is_array($line['items'])) {
				$newItem['items'] = [];
				setNewList($line['items'], $newItem['items'], $nameParam, $pageId);
			}
			array_push($newList, $newItem);
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
