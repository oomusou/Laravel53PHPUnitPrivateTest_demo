<?php

declare(strict_types = 1);

namespace App\Services;

class ShippingService
{
    /**
     * 計算運費
     * @param int $weight
     * @return int
     */
    private function calculateFee(int $weight) : int
    {
        return 100 * $weight + 10;
    }
}