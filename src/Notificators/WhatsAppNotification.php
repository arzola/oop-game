<?php

namespace App\Notificators;

use App\BaseObject;

class WhatsAppNotification
{
    public function notify(BaseObject $subject): string
    {
        return "WhatsApp notification sent to";
    }

}
