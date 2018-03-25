<h3>Результаты поиска</h3>
<?php foreach ($collection as $item): ?>
    <p><?php echo 'Широта: '.$item->getLatitude().' Долгота: '.$item->getLongitude(); ?></p>
<?php endforeach; ?>
