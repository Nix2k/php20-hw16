<?php
require_once __DIR__.'/routines.php';

if (isset($_GET['address'])) {
	$address = clearInput($_GET['address']);

	$geo = new \Yandex\Geo\Api();
	$geo->setQuery($address);
	$geo->load();
	$response = $geo->getResponse();
	
	$collection = $response->getList();
	foreach ($collection as $item) {

	    echo "Широта: ".$item->getLatitude()." Долгота: ".$item->getLongitude()."<br>";
	}

}
else {
	die("Неверный запрос");
}

?>
