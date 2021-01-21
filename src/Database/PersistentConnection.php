<?php

namespace Db;

use Db\Drivers\DatabaseDriver;

class PersistentConnection extends Connection
{

    /**
     * @var string
     */
    private $type;

    public function __construct(DatabaseDriver $driver)
    {
        $this->type = 'Persistent';
    }


}
