<?php

namespace App;

/*
 * Implement missing code
 * TIP: You are allowed to add params to the methods
 * TIP: Be careful about interfaces
 */


class User implements BaseObject
{
    private $name;
    private $notificator;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update()
    {
    }

    public function getInfo()
    {
        return $this->name;
    }
}
