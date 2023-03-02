<?php

/**
 * The WritingStateInterface defines the interface for all writing states.
 */
interface WritingStateInterface
{
    public function write(string $words);
}