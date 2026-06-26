<?php
declare(strict_types=1);

function currentStatus(array $shipment): ?string
{
    return $shipment['status'] ?? null;
}

function isDelivered(array $shipment): bool
{
    return currentStatus($shipment) === 'delivered';
}

$shipmentA = [
    'tracking_number' => 'SHP-001',
    'status' => 'in_transit',
];

$shipmentB = [
    'tracking_number' => 'SHP-002',
    'status' => 'delivered',
];

$shipmentC = [
    'tracking_number' => 'SHP-003',
];

var_dump(currentStatus($shipmentA));
var_dump(isDelivered($shipmentA));

var_dump(currentStatus($shipmentB));
var_dump(isDelivered($shipmentB));

var_dump(currentStatus($shipmentC));
var_dump(isDelivered($shipmentC));
