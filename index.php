<?php
require_once __DIR__.'/routines.php';

$header = 'Поиск адреса';
include __DIR__.'/templates/main.php';
include __DIR__.'/templates/form_search.php';

if (isset($_GET['act'])) {
	if ($_GET['act']=='Поиск') {
		if ((isset($_GET['address'])) && ($_GET['address'] != '')) {
			$address = clearInput($_GET['address']);
			$geo = new \Yandex\Geo\Api();
			$geo->setQuery($address);
			$geo->load();
			$response = $geo->getResponse();
			$collection = $response->getList();
			include __DIR__.'/templates/geo_points.php';
			include __DIR__.'/templates/yandex_maps_js.php';
			include __DIR__.'/templates/map.php';
		}
	}
}

include __DIR__.'/templates/footer.php';
?>
