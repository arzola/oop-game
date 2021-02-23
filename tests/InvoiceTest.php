<?php

use PHPUnit\Framework\TestCase;
use Properties\DiscountedInvoice;

/**
 * @group 2
 */
class InvoiceTest extends TestCase
{
    public function test_if_invoice_return_800(): void
    {
        $invoice = new DiscountedInvoice();
        $total = $invoice->print();
        self::assertEquals('$800', $total);
    }
}
