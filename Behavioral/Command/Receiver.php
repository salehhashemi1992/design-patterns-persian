<?php

// Receiver class that performs the operations
class Receiver
{
    private int $value = 0;

    public function add($value): void
    {
        $this->value += $value;
    }

    public function subtract($value): void
    {
        $this->value -= $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}