<?php
declare(strict_types=1);

namespace App\Domain\Shipment;

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
