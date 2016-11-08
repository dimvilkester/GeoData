<?php
require 'vendor/autoload.php';

$api = new \Yandex\Geo\Api();

// Или можно искать по адресу
if (isset($_POST['adress'])) {
	$adress = htmlspecialchars($_POST['adress']);
	$api->setQuery($adress);
}

// Настройка фильтров
$api
    ->setLimit(1) // кол-во результатов
    ->setLang(\Yandex\Geo\Api::LANG_US) // локаль ответа
    ->load();

$response = $api->getResponse();
$response->getFoundCount(); // кол-во найденных адресов
$response->getQuery(); // исходный запрос
$response->getLongitude(); // долгота для исходного запроса

// Список найденных точек
$collection = $response->getList(); // Далее вывод информации через цикл