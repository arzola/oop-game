<?php
namespace Properties;

class InvoiceWithCoupon extends RegularInvoice
{
	public function __construct($price)
	{
		$this->price = $price * .60;
	}

}
