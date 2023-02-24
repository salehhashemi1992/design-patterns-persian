<?php

/**
 * Concrete Decorators
 */
class SMSNotificationDecorator extends NotificationDecorator
{
    public function send(): string
    {
        return "Sending an SMS notification. " . parent::send();
    }
}

class EmailNotificationDecorator extends NotificationDecorator
{
    public function send(): string
    {
        return "Sending an email notification. " . parent::send();
    }
}