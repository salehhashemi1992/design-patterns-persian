<?php

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {
        // Private constructor to prevent creating new instances of the Singleton class
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function doSomething(): void
    {
        echo "I am doing something!";
    }
}
