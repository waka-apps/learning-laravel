<?php
declare(strict_types=1);

class Shipment
{
    public string $trackingNumber;
    private string $status;

    public function __construct(string $trackingNumber, string $status)
    {
        $this->trackingNumber = $trackingNumber;
        $this->status = $status;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function markDelivered(): void
    {
        $this->status = "delivered";
    }
}

$shipment = new Shipment("SHP-001", "in_transit");

var_dump($shipment->trackingNumber);
var_dump($shipment->status());

$shipment->markDelivered();

var_dump($shipment->status());
