<?php
declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

use App\Domain\Shipment\Shipment;
use App\Domain\Shipment\ShipmentStatus;

/**
 * @param list<Shipment> $shipments
 */
function findShipment(array $shipments, string $trackingNumber): ?Shipment
{
    foreach ($shipments as $shipment) {
        if ($shipment->trackingNumber === $trackingNumber) {
            return $shipment;
        }
    }

    return null;
}

/**
 * @param list<Shipment> $shipments
 */
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

/** @var list<Shipment> $shipments */
$shipments = [$shipment1, $shipment2, $shipment3];

$foundShipment001 = findShipment(
    shipments: $shipments,
    trackingNumber: "SHP-001",
);
var_dump($foundShipment001->status());
var_dump($foundShipment001->deliveredAt());

$foundShipment001->markDelivered(
    new DateTimeImmutable("2026-06-29T18:00:00+09:00"),
);
var_dump($foundShipment001->status());
var_dump($foundShipment001->deliveredAt()?->format(DATE_ATOM));

var_dump(findShipment(shipments: $shipments, trackingNumber: "SHP-999"));
try {
    var_dump(requireShipment(shipments: $shipments, trackingNumber: "SHP-999"));
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
