<?php

/**
 * The TextEditor class maintains a reference to a writing state and allows changing it at runtime.
 */
class TextEditor
{
    private WritingStateInterface $state;

    public function __construct()
    {
        $this->state = new DefaultText();
    }

    public function setState(WritingStateInterface $state): void
    {
        $this->state = $state;
    }

    public function type(string $words): void
    {
        $this->state->write($words);
    }
}