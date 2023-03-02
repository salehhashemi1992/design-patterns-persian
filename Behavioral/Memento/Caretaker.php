<?php

// Caretaker class
class EditorHistory
{
    private array $mementos = [];

    public function addMemento(EditorMemento $memento): void
    {
        $this->mementos[] = $memento;
    }

    public function getMemento(int $index): EditorMemento
    {
        return $this->mementos[$index];
    }
}