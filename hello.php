<?php
declare(strict_types=1);

enum ShipmentStatus: string
{
    case Accepted = "accepted";
    case InTransit = "in_transit";
    case Delivered = "delivered";
}

class Shipment
{
    public function __construct(
        public readonly string $trackingNumber,
        private ShipmentStatus $status,
    ) {}

    public function status(): string
    {
        return $this->status->value;
    }

    public function markDelivered(): void
    {
        $this->status = ShipmentStatus::Delivered;
    }

    public function statusLabel(): string
    {
        return match ($this->status) {
            ShipmentStatus::Accepted => "Accepted",
            ShipmentStatus::InTransit => "In transit",
            ShipmentStatus::Delivered => "Delivered",
        };
    }
}

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
