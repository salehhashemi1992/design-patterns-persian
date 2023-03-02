<?php

/**
 * The UpperCase class represents a writing state where all text is converted to uppercase.
 */
class UpperCase implements WritingStateInterface
{
    public function write(string $words)
    {
        echo strtoupper($words) . "\n";
    }
}

/**
 * The LowerCase class represents a writing state where all text is converted to lowercase.
 */
class LowerCase implements WritingStateInterface
{
    public function write(string $words)
    {
        echo strtolower($words) . "\n";
    }
}

/**
 * The DefaultText class represents the default writing state where text is output as is.
 */
class DefaultText implements WritingStateInterface
{
    public function write(string $words)
    {
        echo $words . "\n";
    }
}