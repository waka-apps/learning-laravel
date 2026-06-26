<?php
declare(strict_types=1);

$events = ['accepted', 'in_transit', 'arrived_at_hub'];

$shipment = [
    'tracking_number' => 'SHP-001',
    'status' => 'in_transit',
    'carrier' => 'yamato',
];

echo $events[0] . "\n";
echo $events[1] . "\n";

echo $shipment['tracking_number'] . "\n";
echo $shipment['status'] . "\n";
echo $shipment['dummy'] . "\n";

var_dump($events);
var_dump($shipment);
