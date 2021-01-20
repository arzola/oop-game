<?php

namespace App;

interface Notificable
{
    public function notify(BaseObject $subject);
}
