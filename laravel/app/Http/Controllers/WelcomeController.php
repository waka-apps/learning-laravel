<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index(): array
    {
        return ['message' => 'ok'];
    }

    public function show(string $trackingNumber): array
    {
        return [
            'tracking_number' => $trackingNumber,
        ];
    }
}
