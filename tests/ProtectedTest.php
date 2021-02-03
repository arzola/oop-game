<?php

use PHPUnit\Framework\TestCase;
use Properties\InvoiceWithCoupon;

/**
 * @group 1
 */
class ProtectedTest extends TestCase
{
    public function test_the_right_modifier_access_works(): void
    {
        $invoice = new InvoiceWithCoupon(1000);
        $total = $invoice->getTotal();
        self::assertEquals(600, $total);

        $invoice = new InvoiceWithCoupon(2000);
        $total = $invoice->getTotal();
        self::assertEquals(1200, $total);
    }

    public function test_if_friendly_access_is_denied(): void
    {
        $this->expectException(Error::class);
        $invoice = new InvoiceWithCoupon(1000);
        $price = $invoice->price;
    }

    public function test_if_core_methods_cannot_be_overriden(): void
    {
        $reflection = new ReflectionClass(InvoiceWithCoupon::class);
        $getTotalIsFinal = $reflection->getMethod('getTotal')->isFinal();
        self::assertTrue($getTotalIsFinal);
    }

}
