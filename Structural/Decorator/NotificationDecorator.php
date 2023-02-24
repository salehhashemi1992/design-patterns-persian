<?php

/**
 * The base Decorator class
 */
class NotificationDecorator implements Notification
{
    /**
     * @var Notification
     */
    protected Notification $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * @return string
     */
    public function send(): string
    {
        return $this->notification->send();
    }
}