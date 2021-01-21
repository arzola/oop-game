<?php

namespace Properties;


class RegularInvoice
{
    private $price;

    /**
     * RegularInvoice constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    final public function getTotal()
    {
        return $this->process();
    }

    private function process()
    {
        return $this->price;
    }

}
