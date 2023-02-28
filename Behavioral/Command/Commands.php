<?php

// Concrete command class for adding numbers
class AddCommand implements Command
{
    private Receiver $receiver;
    private int $value;

    public function __construct(Receiver $receiver, int $value)
    {
        $this->receiver = $receiver;
        $this->value = $value;
    }

    public function execute()
    {
        $this->receiver->add($this->value);
    }

    public function undo()
    {
        $this->receiver->subtract($this->value);
    }
}

// Concrete command class for subtracting numbers
class SubtractCommand implements Command
{
    private Receiver $receiver;
    private int $value;

    public function __construct(Receiver $receiver, int $value)
    {
        $this->receiver = $receiver;
        $this->value = $value;
    }

    public function execute()
    {
        $this->receiver->subtract($this->value);
    }

    public function undo()
    {
        $this->receiver->add($this->value);
    }
}