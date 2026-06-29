<?php
declare(strict_types=1);

namespace App\Domain\Shipment;

use DateTimeImmutable;

class Shipment
{
    public function __construct(
        public readonly string $trackingNumber,
        private ShipmentStatus $status,
        private ?DateTimeImmutable $deliveredAt = null,
    ) {}

    public function status(): string
    {
        return $this->status->value;
    }

    public function deliveredAt(): ?DateTimeImmutable
    {
        return $this->deliveredAt;
    }

    public function markDelivered(DateTimeImmutable $deliveredAt): void
    {
        $this->status = ShipmentStatus::Delivered;
        $this->deliveredAt = $deliveredAt;
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
