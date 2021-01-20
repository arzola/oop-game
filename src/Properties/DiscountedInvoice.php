<?php

namespace Properties;

class DiscountedInvoice extends BaseInvoice
{
	private function getTotal() :string
	{
		return '$800';
	}
}
