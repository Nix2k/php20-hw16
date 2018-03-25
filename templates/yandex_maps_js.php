<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
	ymaps.ready(init);

	function init () {
		var myMap = new ymaps.Map("map", {
				center: [<?php echo $collection[0]->getLatitude().', '.$collection[0]->getLongitude();?>],
				zoom: 5
			}),
			<?php 
				$i=0;
				foreach ($collection as $item): 
			?>
    			myPlacemark<?= $i; ?> = new ymaps.Placemark([<?php echo $item->getLatitude().', '.$item->getLongitude();?>], {
					balloonContentHeader: "<?= $address; ?>"
				});
				myMap.geoObjects.add(myPlacemark<?= $i; ?>);
				<?php $i++; ?>
			<?php endforeach; ?>
	}
</script>
