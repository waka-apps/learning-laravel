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

    public function isDelivered(): bool
    {
        return $this->status === "delivered";
    }
}

$shipmentA = new Shipment("SHP-001", "in_transit");
$shipmentB = new Shipment("SHP-002", "delivered");

var_dump($shipmentA->trackingNumber);
var_dump($shipmentA->status);
var_dump($shipmentA->isDelivered());

var_dump($shipmentB->trackingNumber);
var_dump($shipmentB->status);
var_dump($shipmentB->isDelivered());
