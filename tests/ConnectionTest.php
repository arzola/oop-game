<?php

use PHPUnit\Framework\TestCase;
use Db\Connection;
use Db\PersistentConnection;
use Db\Drivers\MySql;
use Db\Drivers\Oracle;

class ConnectionTest extends TestCase
{
    public function test_if_mysql_connection_is_established(): void
	{
        $connection = new Connection(new MySql);
        $driver = $connection->getDriver();
        self::assertEquals('Connected to: Db\Drivers\MySql', $driver);
    }

    public function test_if_oracle_connection_is_established(): void
	{
        $connection = new Connection(new Oracle);
        $driver = $connection->getDriver();
        self::assertEquals('Connected to: Db\Drivers\Oracle', $driver);
    }

    public function test_if_child_connection_works(): void
	{
        $connection = new PersistentConnection(new MySql);
        $driver = $connection->getDriver();
        self::assertEquals('Connected to: Db\Drivers\MySql', $driver);
        self::assertEquals('Persistent', $connection->getType());
    }

}
