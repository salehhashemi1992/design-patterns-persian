<?php

// Invoker class that manages the commands
class Invoker
{
    private array $commands = [];
    private array $undoStack = [];

    public function addCommand(Command $command): void
    {
        $this->commands[] = $command;
    }

    public function executeCommands(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
            $this->undoStack[] = $command;
        }
        $this->commands = [];
    }

    public function undo(): void
    {
        if (!empty($this->undoStack)) {
            $command = array_pop($this->undoStack);
            $command->undo();
        }
    }
}