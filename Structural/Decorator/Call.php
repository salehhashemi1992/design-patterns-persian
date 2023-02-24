<?php

function clientCode(Notification $notification): void
{
    echo $notification->send();
}

/**
 * This way the client code can support both simple notifications...
 */
$simple = new ConcreteNotification();
echo "Client: I've got a simple notification:\n";
clientCode($simple);
echo "\n\n";

/**
 * ...as well as decorated ones.
 *
 * Note how decorators can wrap not only simple notifications but the other
 * decorators as well.
 */
$smsNotification = new SMSNotificationDecorator($simple);
$emailNotification = new EmailNotificationDecorator($smsNotification);
echo "Client: Now I've got a decorated notification:\n";
clientCode($emailNotification);

// Output:
// Client: I've got a simple notification:
// RESULT: ConcreteNotification
//
//  Client: Now I've got a decorated notification:
//  RESULT: EmailNotificationDecorator(SMSNotificationDecorator(ConcreteNotification))