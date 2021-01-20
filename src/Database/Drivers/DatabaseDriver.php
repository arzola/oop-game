<?php

namespace Db\Drivers;


abstract class DatabaseDriver
{
    final public function getName()
    {
        return $this->name;
    }
}
