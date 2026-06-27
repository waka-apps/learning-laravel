<?php
declare(strict_types=1);

class Shipment
{
    public string $trackingNumber;
    public string $status;

    public function __construct(string $trackingNumber, string $status)
    {
        $this->trackingNumber = $trackingNumber;
        $this->status = $status;
    }

    public function label(): string
    {
        return match ($this->status) {
            "accepted" => "Accepted",
            "in_transit" => "In transit",
            "delivered" => "Delivered",
            default => "Unknown",
        };
    }

    public function isDelivered(): bool
    {
        return $this->status === "delivered";
    }
}

$shipments = [
    new Shipment("SHP-001", "accepted"),
    new Shipment("SHP-002", "in_transit"),
    new Shipment("SHP-003", "delivered"),
];

foreach ($shipments as $shipment) {
    echo $shipment->trackingNumber . "\n";
    echo $shipment->label() . "\n";
    echo ($shipment->isDelivered() ? "yes" : "no") . "\n";
}
