<?php

use App\Services\ShippingService;

class ShippingServiceTest extends TestCase
{
    /** @test */
    public function 當重量為1kg時費用為110元()
    {
        /** arrange */
        $target = App::make(ShippingService::class);

        $__calculateFee = function (int $weight) {
            return $this->calculateFee($weight);
        };

        /** act */
        $weight = 1;
        $actual = $__calculateFee->call($target, $weight);

        /** assert */
        $expected = 110;
        $this->assertEquals($expected, $actual);
    }
}
