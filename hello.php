<?php
declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

use App\Domain\Shipment\Shipment;
use App\Domain\Shipment\ShipmentStatus;

function findShipment(array $shipments, string $trackingNumber): ?Shipment
{
    foreach ($shipments as $shipment) {
        if ($shipment->trackingNumber === $trackingNumber) {
            return $shipment;
        }
    }

    return null;
}

function requireShipment(array $shipments, string $trackingNumber): Shipment
{
    $shipment = findShipment($shipments, $trackingNumber);

    if ($shipment === null) {
        throw new Exception("Shipment not found: {$trackingNumber}");
    }

    return $shipment;
}

$shipment1 = new Shipment("SHP-001", ShipmentStatus::InTransit);
$shipment2 = new Shipment("SHP-002", ShipmentStatus::InTransit);
$shipment3 = new Shipment("SHP-003", ShipmentStatus::InTransit);
$shipments = [$shipment1, $shipment2, $shipment3];

var_dump(findShipment(shipments: $shipments, trackingNumber: "SHP-999"));

try {
    var_dump(requireShipment(shipments: $shipments, trackingNumber: "SHP-999"));
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
