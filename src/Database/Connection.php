<?php

namespace Db;

use Db\Drivers\DatabaseDriver;


class Connection
{
    private $driver;

    /**
     * Connection constructor.
     *
     * @param DatabaseDriver $driver
     */
    public function __construct(DatabaseDriver $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver(): string
    {
        return "Connected to: Db\Drivers\\";
    }

}
