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

$shipment = new Shipment("SHP-001", ShipmentStatus::InTransit);

var_dump($shipment->trackingNumber);
var_dump($shipment->status());
var_dump($shipment->statusLabel());

$shipment->markDelivered();

var_dump($shipment->status());
var_dump($shipment->statusLabel());
