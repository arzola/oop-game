<?php

namespace Properties;

class BaseInvoice
{
    public function print(): string
	{
        return $this->getTotal();
    }

    private function getTotal(): string
	{
        return '$1,000';
    }
}
