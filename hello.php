<?php
declare(strict_types=1);

$status = 'in_transit';
$events = ['accepted', 'in_transit', 'arrived_at_hub'];

if ($status === 'in_transit') {
    echo "Shipment is moving\n";
} else {
    echo "Shipment is not moving\n";
}

$message = match ($status) {
    'accepted' => 'Accepted',
    'in_transit' => 'In transit',
    'arrived_at_hub' => 'Arrived at hub',
    default => 'Unknown status',
};

echo $message . "\n";

foreach ($events as $event) {
    echo $event . "\n";
}
