<?php

/**
 * Concrete Notifications
 */
class ConcreteNotification implements Notification
{
    public function send(): string
    {
        return "Sending a concrete notification";
    }
}