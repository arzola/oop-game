<?php

namespace App\Notificators;

use App\BaseObject;

class EmailNotification
{
    public function notify(BaseObject $subject): string
	{
		return "Email notification sent to";
    }

}
