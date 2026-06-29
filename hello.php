<?php
declare(strict_types=1);

function estimateArrivalImmutable(
    DateTimeImmutable $shippedAt,
): DateTimeImmutable {
    return $shippedAt->modify("+2 days");
}

function estimateArrival(DateTime $shippedAt): DateTime
{
    return $shippedAt->modify("+2 days");
}

$shippedAt = new DateTimeImmutable("2026-06-29T09:00:00+09:00");
$estimatedArrivalAt = estimateArrivalImmutable($shippedAt);

echo "Immutable\n";
var_dump($shippedAt->format(DATE_ATOM));
var_dump($estimatedArrivalAt->format(DATE_ATOM));

$mutableShippedAt = new DateTime("2026-06-29T09:00:00+09:00");
$mutableEstimatedArrivalAt = estimateArrival($mutableShippedAt);

echo "Mutable\n";
var_dump($mutableShippedAt->format(DATE_ATOM));
var_dump($mutableEstimatedArrivalAt->format(DATE_ATOM));
