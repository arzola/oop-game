<?php

use App\User;
use App\Notificators\EmailNotification;
use App\Notificators\WhatsAppNotification;
use PHPUnit\Framework\TestCase;

class ContractsTest extends TestCase
{
    public function test_if_notifications_are_triggered(): void
    {
        $user = new User('Steel', new EmailNotification);
        $result = $user->update();

        $this->assertEquals("Email notification sent to Steel", $result);


        $user = new User('Ricardo', new EmailNotification);
        $result = $user->update();

        $this->assertEquals("Email notification sent to Ricardo", $result);


        $user = new User('Basak', new WhatsAppNotification);
        $result = $user->update();

        $this->assertEquals("WhatsApp notification sent to Basak", $result);
    }
}
