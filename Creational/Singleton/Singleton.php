<?php

class Singleton
{
    private static Singleton $instance;

    private function __construct()
    {
        // Private constructor to prevent creating new instances of the Singleton class
    }

    public static function getInstance(): Singleton
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function doSomething(): void
    {
        echo "I am doing something!";
    }
}
