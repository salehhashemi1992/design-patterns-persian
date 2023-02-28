<?php

// Command interface
interface Command
{
    public function execute();

    public function undo();
}