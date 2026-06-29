<?php
declare(strict_types=1);

namespace App\Domain\Shipment;

enum ShipmentStatus: string
{
    case Accepted = "accepted";
    case InTransit = "in_transit";
    case Delivered = "delivered";
}
