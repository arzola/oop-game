<?php

use PHPUnit\Framework\TestCase;
use Properties\DiscountedInvoice;

class InvoiceTest extends TestCase
{
    public function test_if_factura_return_800(): void
    {
        $invoice = new DiscountedInvoice();
        $total = $invoice->print();
        self::assertEquals('$800', $total);
    }
}
