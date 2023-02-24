<?php

/**
 * The base Notification interface
 */
interface Notification
{
    public function send(): string;
}