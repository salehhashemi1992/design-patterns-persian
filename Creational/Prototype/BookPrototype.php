<?php

abstract class BookPrototype
{
    protected string $title;
    protected string $topic;

    abstract function __clone();

    function getTitle(): string
    {
        return $this->title;
    }

    function setTitle($titleIn): void
    {
        $this->title = $titleIn;
    }

    function getTopic(): string
    {
        return $this->topic;
    }
}